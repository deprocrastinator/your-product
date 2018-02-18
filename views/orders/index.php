<p>Here is a list of all orders:</p>

<?php foreach($orders as $order) { ?>
    <p>
        <?php echo $order->firstname; ?>
        <?php echo $order->lastname; ?>
        <?php echo $order->email; ?>
        <a href='?controller=orders&action=show&id=<?php echo $order->id; ?>'>See content</a>
    </p>
<?php } ?>