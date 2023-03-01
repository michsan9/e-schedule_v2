<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<nav class="sidebar sidebar-offcanvas">
  <ul class="nav">
    <?php if ($this->session->userdata('usr_level') === 'Admin') { ?>
      <li class="nav-item <?= $this->uri->segment(1) === 'dashboard' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('dashboard'); ?>">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) === 'shift' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('shift'); ?>">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Shift</span>
        </a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) === 'jadwal' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('jadwal'); ?>">
          <i class="icon-paper-stack menu-icon"></i>
          <span class="menu-title">Jadwal</span>
        </a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) === 'user' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= site_url('user'); ?>">
          <i class="icon-cog menu-icon"></i>
          <span class="menu-title">Manajemen User</span>
        </a>
      </li>
    <?php } ?>
  </ul>
</nav>