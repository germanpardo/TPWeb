<div class="">

<p>
Habeces no sabemos que consultar.

</p>


</div>


<div class="" id="form">

    <form name="myForm" method="post" action="../TPWeb/secciones/gracias.php" onsubmit="return validateForm()">
        <div class="">
            <label for="nombre">Nombre: </label>
            <input type="text" class="" id="nombre" placeholder="Introducir nombre" name="fname" size="50">
            <label for="" id="fnameval" class="">Campo incompleto</label>
        </div><br>
        <div class="">
            <label for="email">Email: </label>
            <input type="email" class="" id="inputmail" placeholder="Introducir mail" name="femail" size="50">
            <label for="" id="femailval" class="">Campo incompleto</label>
        </div><br>
        <div class="">
            <label for="">Consulta</label>
            <textarea class="" name="comment" id="comentarios" placeholder="" cols="50" rows="10"></textarea>
            <label for="" id="fcomment" class="">Campo incompleto</label>
        </div>

        <div id="temas" class="">
            <div id="titulocheck" class="">Temas de interes</div>
            <div class="">
                <div class="check">
                    <input class="" type="checkbox" id="">
                    <label class="form-check-label" for="">
                        Diseño Web
                    </label>
                </div>
            </div>
        </div>
        <div class="">
            <div class=""></div>
            <div class="">
                <div class="check">
                    <input class="" type="checkbox" id="">
                    <label class="" for="gridCheck1">
                        Hosting
                    </label>
                </div>
            </div>
        </div>
        <div class="">
            <div class=""></div>
            <div class="">
                <div class="check">
                    <input class="" type="checkbox" id="">
                    <label class="" for="gridCheck1">
                        Software
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <div class="check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Descuentos
                    </label>

                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Enviar consulta</button>
            </div>
        </div>

    </form>

</div>
