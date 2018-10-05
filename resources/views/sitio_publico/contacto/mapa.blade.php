
<section id="section-contacto">
    <div class="parallax_content">
        <div class="contact_detail">
            <div style="margin-top:35px;margin-bottom:35px;" class="separator transparent"></div>
            <div id="map"></div>
            <div class="two_columns_66_33 clearfix">
                <div class="column1">
                    <div class="column_inner">
                        <div class="contact_form">
                            <h2 style="  margin-top:0px; ">¡Contáctanos!</h2>
                            <br>
                            <form id="nuevo-comentario" action="/front_email" method="POST" autocomplete="off">
                                <input type="hidden" value="mapa">    
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                <div class="two_columns_50_50 clearfix">
                                    <div class="column1">
                                        <div class="column_inner">
                                            <input style="color: #ffffff" type="text" class="requiredField placeholder" name="nombre" id="nombre_mapa" value="" placeholder="Tú nombre *">
                                        </div>
                                    </div>
                                    <div class="column1">
                                        <div class="column_inner">
                                            <input style="color: #ffffff" type="text" class="requiredField email placeholder" name="correo" id="correo_mapa" value="" placeholder="Email *">
                                        </div>
                                    </div>
                                </div>
                                <textarea style="color: #ffffff" name="contenido" id="contenido_mapa" rows="10" placeholder="Mensaje" class="placeholder"></textarea>
                                <span class="submit_button">
                                    <input class="button small" type="submit" value="Enviar">
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="column2 ">
                    <div class="column_inner">
                        <div class="contact_info ">
                            <h3 style="  margin-top:0px; margin-bottom: 35px;">Nuestras vías de contacto</h3>
                            <div class="div-lindo">
                                <div class="list circle animate_list">    
                                    <ul>
                                        <li style="opacity: 1; top: 0px;"><b>Correo electrónico:</b> <p>programaadolescenciamisiones@gmail.com</p> </li> 
                                        <li style="opacity: 1; top: 0px;"><b>Whatsapp:</b> 3764862719</li>
                                        <li style="opacity: 1; top: 0px;"><b>Teléfono:</b> (0376) 44447840 – 44447808</li>
                                        <li style="opacity: 1; top: 0px;"><b>Dirección:</b> Ministerio de Salud Pública, Tucumán 2174, 2do Piso. Posadas – Misiones</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top:35px;margin-bottom:35px;" class="separator transparent"></div>
    </div>
</section>

