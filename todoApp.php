<?php include('./common/header.php');
require_once('./OverWatch.php');

$overWatch = new OverWatch;
$todos = $overWatch->getTodoListItems(); ?>

<div class="ui four column doubling stackable grid container">
    <div class="ui row">
        <div class="ui top attached tabular menu">
            <a class="inverted item active" data-tab="first">Jquery</a>
            <a class="item" data-tab="second">Vue.js</a>
            <a class="item" data-tab="third">React</a>
        </div>
        <div class="ui bottom attached tab segment active" data-tab="first">
            <div class="ui centered header">
                This is the Todo Test
            </div>
            <div class="ui segment" id="todoTest">
                <div id="todoList" class="ui middle aligned divided list sortable">
                    <?php foreach ($todos as $todo) : ?>
                        <?php if ($todo['deleted'] != 1) : ?>
                            <div class="item todoItem" data-id="<?= $todo['id'] ?>">
                                <div class="right floated content">
                                    <div class="ui negative button deleteTodo">Delete</div>
                                    <div class="ui positive button todoComplete">Complete</div>
                                </div>
                                <div class="ui red circular label left floated todoNum"><?= $todo['position'] ?></div>
                                <div class="content todoContent">
                                    <?= $todo['todoTitle'] ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="ui large fluid action input">
                    <input type="text" id="newTodo" placeholder="Add a todo">
                    <button type="button" id="addTodo" class="ui blue button">Add todo</button>
                </div>
            </div>
        </div>
        <div class="ui bottom attached tab segment" data-tab="second">
            Second
        </div>
        <div class="ui bottom attached tab segment" data-tab="third">
            Third
        </div>
    </div>
</div>
<?php include('./common/footer.php'); ?>