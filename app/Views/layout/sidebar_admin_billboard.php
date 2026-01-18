<?php
$billboard_link = [
  'admin/billboard',
  'admin/billboard/sewa',
  'admin/billboard/lahan'
];
$billboard_aktif = in_array(str_replace(base_url(), '', current_url()), $billboard_link);
?>

<!-- Billboard -->
<li class="nav-item<?= $billboard_aktif ? ' menu-open' : ''  ?>">
    <a href="#" class="nav-link<?= $billboard_aktif ? ' active' : ''  ?>">
        <i class="nav-icon bi bi-easel"></i>
        <p>Billboard <i class="right bi bi-caret-left"></i></p>
    </a>

    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="<?= url_to('admin/billboard') ?>" class="nav-link<?= (current_url() == base_url('admin/billboard')) ? ' active' : '' ?>">
                <i class="nav-icon bi bi-circle"></i>
                <p>Data Billboard</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= url_to('admin/billboard/sewa') ?>" class="nav-link<?= (current_url() == base_url('admin/billboard/sewa')) ? ' active' : '' ?>">
                <i class="nav-icon bi bi-circle"></i>
                <p>Sewa Billboard</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= url_to('admin/billboard/lahan') ?>" class="nav-link<?= (current_url() == base_url('admin/billboard/lahan')) ? ' active' : '' ?>">
                <i class="nav-icon bi bi-circle"></i>
                <p>Lahan Billboard</p>
            </a>
        </li>

    </ul>
</li>