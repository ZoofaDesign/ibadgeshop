<div class="row-fluid">
    <div class="span3">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
        </ul>
    </div>
    <div class="span9">
        <h2><?php echo __('Orders'); ?></h2>
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tr>
                <th>Klant</th>
                <th>Status</th>
                <th>Prijs</th>
                <th>Ontwerpen</th>
                <th>Berichten</th>
                <th class="actions">Acties</th>
            </tr>
            <?php foreach ($orders as $order): ?>

                <tr>
                    <td>
                        <?php echo $this->Html->link($order['Customer']['naam'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['klant_id'])); ?>
                    </td>
                    <td><?php echo h($order['Order']['status']); ?></td>
                    <td><?php echo h($order['Order']['price']); ?><?php //print_r($order);   ?></td>

                    <?php
                    if (!empty($order['Design']))
                    {
                        ?>
                        <td>
                            <?php foreach ($order['Design'] as $design): ?>
            <?php echo $this->Html->link($design['image'], array('controller' => 'Design', 'action' => 'view', $design['order_id'])); ?>
                                <dl class="dl-horizontal">

                                    <dt>Type</dt>
                                    <dd><?php echo h($design['format']); ?></dd>
                                    <?php
                                    if ($design['format'] === 'rond')
                                    {
                                        ?>
                                        <dt>Diameter</dt>
                                        <dd><?php echo h($design['diameter']); ?></dd>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <dt>Breedte</dt>
                                        <dd><?php echo h($design['breedte']); ?></dd>
                                        <dt>Hoogte</dt>
                                        <dd><?php echo h($design['hoogte']); ?></dd>
                                <?php } ?>
                                </dl>
                        <?php endforeach; ?>
                        </td>
                        <?php } ?>

                    <td>
                        <?php foreach ($order['OrderMessage'] as $message): ?>
        <?php echo $this->Html->link($message['title'], array('controller' => 'OrderMessages', 'action' => 'view', $message['id'])); ?>
    <?php endforeach; ?>
                    </td>
                    <td class="actions">

                        <div class="btn-group">
                            <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> Acties</a>
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-pencil"></i><?php echo $this->Html->link(__('Aanpassen'), array('action' => 'edit', $order['Order']['id'])); ?></a></li>
                                <li><a href="#"><i class="icon-trash"></i><?php echo $this->Form->postLink(__('Verwijderen'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?></a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="i"></i><?php echo $this->Html->link(__('Nieuw bericht'), array('controller' => 'ordermessages', 'action' => 'add', $order['Order']['id'])); ?>
</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
<?php endforeach; ?>
        </table>

    </div>
</div>
