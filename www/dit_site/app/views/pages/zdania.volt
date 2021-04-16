/{% include "include/menu.volt" %}


<!-- PAGE CONTAINER-->
<div class="page-container">
{% include "include/heder.volt" %}
<!-- MAIN CONTENT-->
   
    <div class="main-content">
            <div class="section__content section__content--p30">
            <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-5">
                    <div class="card">
                      <div class="card-body">
                          <p><b>Адрес:</b> {{ zdania.FULL_ADDRESS }}</p>
                        <hr>
                          <p><b>Площадь:</b> {{ zdania.GENERAL_AREA_RR }}</p>
                        <hr>
                          <p><b>Назначение:</b> {{ zdania.OKS_PURPOSE_RR }}</p> 
                        <hr>
                          <p><b>Кол-во неплательщиков:</b> {{ zdania.goalnum }}</p>  
                        <hr>
                          <p><b>Кадастровый номер:</b> {{ zdania.CAD_NUM }}</p>  
                        <hr>
                          <p><b>УНОМ</b> : {{ zdania.UNOM }}</p>  
                        <hr>
                          <p><b>Класс объекта</b> : {{ zdania.OBJECT_CLASS }}</p> 
                      </div>
                    </div>
                   </div>
                       <script type="text/javascript">
                            ymaps.ready(init);    
                            function init(){ 
                                var myMap = new ymaps.Map("map", {
                                    center: [{{ zdania.Lat }}, {{ zdania.Lon }}],
                                    zoom: 7
                                }); 
                                myMap.geoObjects
                                    .add(new ymaps.Placemark([{{ zdania.Lat }}, {{ zdania.Lon }}], {}));
                            }
                        </script> 
                    <div id="map" style="width: 670px; height: 400px"></div>
                </div>

                
            </div>
        </div>
    </div>
</div>

