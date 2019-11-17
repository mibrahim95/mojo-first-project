<?php include('./common/header.php'); 
 require_once('./OverWatch.php');

$overWatch = new OverWatch;
$todos = $overWatch->getTodoListItems();?>

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
                <?php foreach($todos as $todo):?>
            <div class="item todoItem">
                        <div class="right floated content">
                            <div class="ui negative button">Delete</div>
                            <div class="ui checkbox">
                                <input type="checkbox" class="todoComplete">
                                <label></label>
                            </div>
                        </div>
                        <div class="ui red circular label left floated todoNum"><?=$todo['position']?></div>
                        <div class="content">
                            <?=$todo['todoTitle']?>
                        </div>
                    </div>
<?php endforeach;?>

                    <div class="item todoItem">
                        <div class="right floated content">
                            <div class="ui negative button">Delete</div>
                            <div class="ui checkbox">
                                <input type="checkbox" class="todoComplete">
                                <label></label>
                            </div>
                        </div>
                        <div class="ui red circular label left floated todoNum">1</div>
                        <div class="content">
                            Test this out
                        </div>
                    </div>
                    <div class="item todoItem">
                        <div class="right floated content">
                            <div class="ui negative button">Delete</div>
                            <div class="ui checkbox">
                                <input type="checkbox" class="todoComplete">
                                <label></label>
                            </div>
                        </div>
                        <div class="ui red circular label left floated todoNum">2</div>
                        <div class="content">
                            learn about this
                        </div>
                    </div>
                    <div class="item todoItem">
                        <div class="right floated content">
                            <div class="ui negative button">Delete</div>
                            <div class="ui checkbox">
                                <input type="checkbox" class="todoComplete">
                                <label></label>
                            </div>
                        </div>
                        <div class="ui red circular label left floated todoNum">3</div>
                        <div class="content">
                            does this work
                        </div>
                    </div>
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