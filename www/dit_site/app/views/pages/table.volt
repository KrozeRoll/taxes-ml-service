{% include "include/menu.volt" %}


<!-- PAGE CONTAINER-->
<div class="page-container">
{% include "include/heder.volt" %}
<!-- MAIN CONTENT-->
<div class="main-content">


<table id="example" class="table table-striped " style="width:100%">
        <thead>
            <tr class="table-bordered">
                <th>Адрес</th>
                <th>Назначение объекта</th>
                <th>Максимальная площадь</th>
                <th>Текущая занимаемая площадь</th>
                <th>Максимальное кол-во ТО</th>
                <th>Предполагаемое кол-во неплательщиков </th>
            </tr>
        </thead>
        <tbody>
            {% for e in table %}
                <tr>
                    <td class="table-bordered"><a href="/zdania?id={{ e.id }}" target = "_blank">{{ e.FULL_ADDRESS }}</a></td>
                    <td class="table-bordered">{{ e.OKS_PURPOSE_RR }}</td>
                    <td class="table-bordered">{{ e.MAXAREA }}</td>
                    <td class="table-bordered">{{ e.AREA }}</td>
                    <td class="table-bordered">{{ e.MAXCOUNT }}</td>
                    <td class="itog">{{ e.goalnum }}</td>
                </tr>
            {% endfor %}
        </tbody>
        <tfoot>
            <tr class="table-bordered">
                <th>Адрес</th>
                <th>Назначение объекта</th>
                <th>Максимальная площадь</th>
                <th>Текущая занимаемая площадь</th>
                <th>Максимальное кол-во ТО</th>
                <th>Предполагаемое кол-во неплательщиков </th>
            </tr>
        </tfoot>
    </table>



</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>