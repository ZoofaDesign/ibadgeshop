<div class="row-fluid">
    <div class="span3">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
        </ul>
    </div>
    <div class="span9">
        <div class="container-fluid">
    <div class="row-fluid">
        <h2><?php echo __('Bestellingen'); ?></h2>
        <ul class="thumbnails">
        <?php foreach ($orders as $order): ?>
            <li class="span4">
                <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="">
                    <div class="caption">
                        <h3>Bestelling <?php echo $order['Order']['id'] ?></h3>
                        <p>Status: <?php echo h($order['Order']['status']); ?><br>
                            Prijs: <?php echo h($order['Order']['price']); ?><br>
                            <?php if (!empty($order['Design']))
                            {
                                foreach ($order['Design'] as $design):?>
                            Type: <?php echo h($design['format']); ?><br>
                            <?php
                            if ($design['format'] === 'rond')
                            {
                                ?>Diameter: <?php
                                echo h($design['diameter']);
                            }
                            else
                            {
                                ?>Breedte: <?php
                                echo h($design['breedte']);
                                ?><br>Hoogte: <?php
                                echo h($design['hoogte']);
                            }
                            ?>
                            <br><?php echo $this->Html->link($order['Customer']['naam'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['klant_id'])); ?>
                            <?php echo $this->Html->link($design['image'], array('controller' => 'Design', 'action' => 'view', $design['order_id']));

                                endforeach;
                            }
                            ?>
                        </p>
                    </div>
                        <p><a href="#" class="btn btn-success"><?php echo __('Accepteer'); ?></a> <a href="#" class="btn btn-danger"><?php echo __('Weigeren'); ?></a></p>
                                        <div class="btn-group">
                            <a class="btn" href="#"><i class="icon-user"></i><?php echo __('Opties'); ?></a>
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/orders/edit/<?php echo $order['Order']['id']; ?>"><i class="icon-pencil"></i><?php echo ' '.__('Aanpassen'); ?></a></li>
                                <li><a href="/orders/delete/<?php echo $order['Order']['id']; ?>"><i class="icon-trash"></i><?php echo ' '.__('Verwijderen'); ?></a></li>
                                <li class="divider"></li>
                                <li><a href="/ordermessages/add?order=<?php echo $order['Order']['id']; ?>"><i class="i"></i><?php echo __('Nieuw bericht'); ?></a></li>
                            </ul>
                        </div>
                </div>
                
            </li>
            



<?php endforeach; ?>
        </ul>
    </div>
        </div>
    </div>
</div>
