{% include "include/menu.volt" %}


<!-- PAGE CONTAINER-->
<div class="page-container">
{% include "include/heder.volt" %}
<!-- MAIN CONTENT-->
<div class="main-content">

    <div class="line" style="background: url(../images/new2.png) no-repeat 0 0; background-size: 100%; height: 323px">
       <div class="col-md-6 px-0">
       		<h1 style="color: white;  font-family: Roboto;"> Торговый сбор </h1>
          <p class="lead my-3" style="color: white;  font-family: Roboto;"> Торговый сбор - ежеквартальный платёж, который был введён 1 июля 2015 года. Данный сайт создан для того, чтобы помочь налоговой службе выявлять здания с неплательщиками.    
        </p>    
        </div>
    </div>
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="au-card recent-report" style="height: 426.75">
                    <div class="au-card-inner">
                        <h3 class="title-2">Найденные неплательщики</h3>
                        <div class="chart-info">
                            <div class="chart-info__left">
                                <div class="chart-note">
                                    <span class="dot dot--blue"></span>
                                    <span>Модель</span>
                                </div>
                                <div class="chart-note mr-0">
                                    <span class="dot dot--green"></span>
                                    <span>Реальность</span>
                                </div>
                            </div>
                        </div>
                        <div class="recent-report__chart">
                            <canvas id="recent-rep-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="au-card chart-percent-card" style="height: 426.75px">
                    <div class="au-card-inner">
                        <h3 class="title-2 tm-b-5">Распределение по типам зданий</h3>
                        <div class="row no-gutters">
                            <div class="col-xl-6">
                                <div class="percent-chart">
                                    <canvas id="percent-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div>
	<div class="line2" style="background: rgb(176, 178, 248); background-size: 100%; height:auto">       
		<div>       
			<p style="color: white; font-family:roboto">На данный момент существует проблема с 
				<strong>торговым сбором</strong>
				: множество предпринимателей уклоняются от уплаты. Некоторые просто не знают, что должны платить.
			 </p>      
			 <p style="color: white; font-family:roboto">На нашем сайте представлена таблица с предполагаемым количеством неплательщиков торгового сбора в каждом из зданий базы данных. Предположение на 2019 год было сделано с помощью алгоритмов машинного обучения.</p>       
	 	</div>
	 	<div style = "text-align: center; padding: 25px 0px 0px 0px">
            <a href="../table" class = "sanbutton">Переход к таблице</a>
	 		
	 	</div>     
	</div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>