<?php $title = 'Непознатата България / Начало'; ?>
<?php include('./header.php'); ?>

 <div id="toolbar">
    <div id="rad">
      Размер <span id="radval">5</span>
      <div id='decrad' class="radcontrol">
        -
      </div>
      <div id="incrad" class="radcontrol">
        +
      </div>
    </div>

    <div id="color">
      <div class="swatch active" style="background-color:black"></div>
      <div class="swatch" style="background-color:green" ></div>
      <div class="swatch" style="background-color:blue"></div>
      <div class="swatch" style="background-color:red" ></div>
      <div class="swatch" style="background-color:white" ></div>
      <div class="swatch" style="background-color:yellow" ></div>
      <div class="swatch" style="background-color:pink" ></div>
      <div class="swatch" style="background-color:purple" ></div>
      <div class="swatch" style="background-color:brown" ></div>
      <div class="swatch" style="background-color:orange" ></div>
    </div>
    <div id="clear">
      Изчисти
    </div>
    <div id="save">
      Запази
    </div>
  </div>
  <canvas id="canvas">
    
  </canvas>

<?php include('./footer.php'); ?>