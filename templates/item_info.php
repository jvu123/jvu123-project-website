<section class="item-section">

<div class="i-container">
    <div class="i-row">
        <div class="i-col">
            <h4>Shop</h4>
        </div>
        <div class="i-col">
            <h4>Name</h4>
        </div>
        <div class="i-col">
            <h4>Description</h4>
        </div>
        <div class="i-col">
            <h4>Rarity</h4>
        </div>
        <div class="i-col">
            <h4>Price</h4>
        </div>
    </div>
    <?php foreach($items as $item){ ?>
        <div class="i-row">

            <div class="i-col">
                <p><?php echo htmlspecialchars($item['name']); ?></p>
            </div>
            <div class="i-col">
                <p><?php echo htmlspecialchars($item['item_name']); ?></p>
            </div>
            <div class="i-col">
                <p><?php echo htmlspecialchars($item['description']); ?></p>
            </div>
            <div class="i-col">
                <p><?php echo htmlspecialchars($item['rarity']); ?></p>
            </div>
            <div class="i-col">
                <p><?php echo htmlspecialchars($item['price']) , ' gold'; ?></p>
            </div>

        </div>
    <?php } ?>
</div>

</section>