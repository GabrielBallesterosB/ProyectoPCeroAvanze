<div class="articulo">
    <input type="hidden" id="id" value="<?php echo $item['id'];  ?>">
    <div class="imagen"><img src="img/<?php echo $item['imagen'];  ?>" /></div>
    <div class="titulo"><?php echo $item['nombre'];  ?></div>
    <div class="precio"><?php echo $item['caracteristicas'];  ?> </div>
    
    <div class="botones">
        <button class='btn-add'>Elegir</button>
    </div>
</div>