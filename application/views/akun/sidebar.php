<div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?php echo base_url(); ?>"><?= $singkatan; ?></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html"><?= $singkatan; ?></a>
                    </div>
                    <ul class="sidebar-menu">
                        <?php $a=1; $b=0?>
                        <?php foreach($header as $king):?>
                        <li class="menu-header"><?= $king['name']; ?>
                            <?php foreach($menu as $queen):?>
                                <?php if($king['id'] == $queen['parent']): ?>
                                    <?php foreach($submenu as $jack):?>
                                        <?php if($queen['child'] == $jack['id']): ?>
                                            <?php if($active == $a): ?>
                                                <li class="active">
                                            <?php else: ?>
                                                <li>
                                            <?php endif;?>
                                                <a href="<?= base_url()?>akunsaya/<?= strtolower($jack['name']);?>" class="nav-link"><i class="fas fa-fire"></i><span><?= $jack['name']; ?></span></a>
                                                <?php $a++;?>
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                <?php endif;?>
                            <?php endforeach;?>
                        </li>
                        <?php endforeach;?>
                    </ul>

                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                            <i class="fas fa-rocket"></i> Documentation
                        </a>
                    </div>
                </aside>
            </div>