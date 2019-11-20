<?php include('./common/header.php');
$overWatch = new OverWatch;
$products = $overWatch->getProducts(); ?>

<div class="ui ten centered column grid">
    <div class="ten wide column">
        <div class="ui segment">
            <div class="ui centered header">Search heading</div>
            <div class="ui fluid icon input">
                <i class="search icon"></i>
                <input type="text" id="searchText" placeholder="Search">
            </div>
            <table class="ui selectable celled table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Sku</th>
                    </tr>
                </thead>
                <tbody id="tableToSearch">
                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <td><?= $product['product_name'] ?></td>
                            <td><?= money_format('%i', $product['price']) ?></td>
                            <td><?= $product['sku'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('./common/footer.php'); ?>