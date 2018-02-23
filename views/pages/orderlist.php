<header>
    <a href='/your-product'>Home</a>
    <a href='?controller=orders&action=index'>Orders</a>
</header>

<div class="section">
    <p>Here is a list of all orders: <br/></p>

    <table style="width:100%">
        <tr>
            <th width="5%">Order ID</th>
            <th width="5%">Quantity</th> 
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th> 
        </tr>
        <?php foreach($orders as $order) { ?>
        <tr>
            <td>
                <?php echo $order->id; ?>
            </td>
            <td>
                <?php echo $order->quantity; ?>
            </td>
            <td>
                <?php echo $order->firstname; ?>
            </td>
            <td>
                <?php echo $order->lastname; ?>
            </td>
            <td>
                <?php echo $order->email; ?>
            </td>
            
        </tr>
        <?php } ?>
    </table>

</div>