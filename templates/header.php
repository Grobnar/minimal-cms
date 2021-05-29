
<header>
  <div class="p-0 text-center bg-image"
    style="
      background-image: url('<?php echo $block->imageURL ?>');
      height: 300px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3"><?php echo $block->heading ?></h1>
          <h4 class="mb-3"><?php echo $block->subheading ?></h4>
        </div>
      </div>
    </div>
  </div>
</header>
