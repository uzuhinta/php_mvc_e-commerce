<div>

    <h2>Please select a category</h2>
    <?php foreach ($categories as $category):?>
        <div class="category">

        <?php echo $html->link($category['Category']['name'],'categories/view/'.$category['Category']['id'].'/'.$category['Category']['name'], 1)?>

    </div>
    <?php endforeach?>

    <?php echo $html->includeJs("generic"); ?>

</div>