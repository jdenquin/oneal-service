<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php echo $this->Html->charset(); ?>
    <title>Administrator | <?php echo $title_for_layout; ?></title>
    <?php
        echo $this->fetch('meta');
        echo $this->Html->css('admin');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body>
    <div id="container">
        <div id="menu">
            <ul>
                <li>
                    <?php echo $this->Html->link('Users', array('admin' => true, 'controller' => 'users', 'action' => 'view')); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Categories', array('admin' => true, 'controller' => 'categories', 'action' => 'view')); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Products', array('admin' => true, 'controller' => 'products', 'action' => 'view')); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Pieces', array('admin' => true, 'controller' => 'pieces', 'action' => 'view')); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Logout', array('admin' => true, 'controller' => 'users', 'action' => 'logout')); ?>
                </li>
            </ul>
        </div>
        <div id="content">
            <?php echo $this->Session->flash(); ?>
            
            <?php echo $this->fetch('content'); ?>
        </div>
 
        <div id="footer">
            © <?php echo date("Y");?> - All rights          
    </div>
             <?php echo $this->element('sql_dump'); ?>    
    </div>
 
</body>
</html>