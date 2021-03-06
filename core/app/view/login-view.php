
<?php
if (Session::getUID() != "") {
    print "<script>window.location='index.php?view=home';</script>";
}
?>
<style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
    body {
        font-family: 'Open Sans', 'sans-serif';
        background: #f0f0f0;

    }

    h1,
    .h1 {
        font-size: 36px;
        text-align: center;
        font-size: 5em;
        color: #404041;
    }

    .navbar-nav>li>.dropdown-menu {
        margin-top: 20px;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }

    .navbar-default .navbar-nav>li>a {
        width: 200px;
        font-weight: bold;
    }

    .mega-dropdown {
        position: static !important;
        width: 100%;
    }

    .mega-dropdown-menu {
        padding: 20px 0px;
        width: 100%;
        box-shadow: none;
        -webkit-box-shadow: none;
    }

    .mega-dropdown-menu:before {
        content: "";
        border-bottom: 15px solid #fff;
        border-right: 17px solid transparent;
        border-left: 17px solid transparent;
        position: absolute;
        top: -15px;
        left: 285px;
        z-index: 10;
    }

    .mega-dropdown-menu:after {
        content: "";
        border-bottom: 17px solid #ccc;
        border-right: 19px solid transparent;
        border-left: 19px solid transparent;
        position: absolute;
        top: -17px;
        left: 283px;
        z-index: 8;
    }

    .mega-dropdown-menu > li > ul {
        padding: 0;
        margin: 0;
    }

    .mega-dropdown-menu > li > ul > li {
        list-style: none;
    }

    .mega-dropdown-menu > li > ul > li > a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: normal;
        line-height: 1.428571429;
        color: #999;
        white-space: normal;
    }

    .mega-dropdown-menu > li ul > li > a:hover,
    .mega-dropdown-menu > li ul > li > a:focus {
        text-decoration: none;
        color: #444;
        background-color: #f5f5f5;
    }

    .mega-dropdown-menu .dropdown-header {
        color: #428bca;
        font-size: 18px;
        font-weight: bold;
    }

    .mega-dropdown-menu form {
        margin: 3px 20px;
    }

    .mega-dropdown-menu .form-group {
        margin-bottom: 3px;

    }
    .calendar-day {
        width: 100px;
        min-width: 100px;
        max-width: 100px;
        height: 80px;
    }
    .calendar-table {
        margin: 0 auto;
        width: 700px;
    }
    .selected {
        background-color: #eee;
    }
    .outside .date {
        color: #ccc;
    }
    .timetitle {
        white-space: nowrap;
        text-align: right;
    }
    .event {
        border-top: 1px solid #103e64;
        border-bottom: 1px solid #103e64;
        background-image: linear-gradient(to bottom, #008def 0px, #3da0e4 100%);
        background-repeat: repeat-x;
        color: #ffffff;
        border-width: 1px;
        font-size: .75em;
        padding: 0 .75em;
        line-height: 2em;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-bottom: 1px;
    }
    .event.begin {
        border-left: 1px solid #b2dba1;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }
    .event.end {
        border-right: 1px solid #b2dba1;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }
    .event.all-day {
        border-top: 1px solid #9acfea;
        border-bottom: 1px solid #9acfea;
        background-image: linear-gradient(to bottom, #d9edf7 0px, #b9def0 100%);
        background-repeat: repeat-x;
        color: #31708f;
        border-width: 1px;
    }
    .event.all-day.begin {
        border-left: 1px solid #9acfea;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }
    .event.all-day.end {
        border-right: 1px solid #9acfea;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }
    .event.clear {
        background: none;
        border: 1px solid transparent;
    }
    .table-tight > thead > tr > th,
    .table-tight > tbody > tr > th,
    .table-tight > tfoot > tr > th,
    .table-tight > thead > tr > td,
    .table-tight > tbody > tr > td,
    .table-tight > tfoot > tr > td {
        padding-left: 0;
        padding-right: 0;
    }
    .table-tight-vert > thead > tr > th,
    .table-tight-vert > tbody > tr > th,
    .table-tight-vert > tfoot > tr > th,
    .table-tight-vert > thead > tr > td,
    .table-tight-vert > tbody > tr > td,
    .table-tight-vert > tfoot > tr > td {
        padding-top: 0;
        padding-bottom: 0;
    }
    .index-social{
        background-color:#003e65;
        color:#fff;
    }
    .link-area .fa-li{
        width:40px;
        height:40px;
        border-radius:50%;
        border:solid 1px #fff;
        list-style-type:none;
        margin:5px;
        display:inline-block;
    }
    .index-social a{
        color:#fff;
        font-size:25px;
        display:block;
        float:left;
        padding:10px;
    }
    .index-link h3{
        text-align:center;
        color:#f1f1f1;
        text-align:left;

    }
    .index-link{
        background-color:#009fe3;
    }
    .index-link ul{
        padding:0px;
    }
    .index-link ul li{
        list-style-type:none;
    }
    .index-link ul li a{
        text-decoration:none;
        font-size:16px;
        color:#fff;
        display:block;
        padding:5px 0;
        text-align:left;
    }
    .index-link ul li a:hover{
        text-decoration:underline;
    }
    .copy-c{
        padding-top:15px;
    }

</style>
<script type="text/javascript">
    jQuery(document).on('click', '.mega-dropdown', function (e) {
        e.stopPropagation()
    })
</script>
<div class="container">
    <div class="col-md-3">
        <img src="img/logobogota.png" style="margin-top: 36px;"/>
    </div>
    <div class="col-md-6">
        <img src="img/LogoP.png" style="display: block;margin-top: 36px; margin-left: 11%"/>
    </div>
    <div class="col-md-3">
        <img src="img/JCNSC.png" style="width: 50%; height: 50%; margin-left: 50%"/>
    </div>
</div>
<br/><br/>
<div class="container">
    <nav class="navbar" style="background-color: #009fe3;">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color:#fff">Menu</a>
        </div>
        <div class="collapse navbar-collapse js-navbar-collapse" >
            <ul class="nav navbar-nav">
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#fff">Futbol 11</a>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#fff">Futbol 8</a>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#fff">Baloncesto </a>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#fff">Voleibol </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container theme-showcase">
    <h1>Programacion</h1>
    <div id="holder" class="row" ></div>
</div>


<script type="text/tmpl" id="tmpl">
    {{ 
    var date = date || new Date(),
    month = date.getMonth(), 
    year = date.getFullYear(), 
    first = new Date(year, month, 1), 
    last = new Date(year, month + 1, 0),
    startingDay = first.getDay(), 
    thedate = new Date(year, month, 1 - startingDay),
    dayclass = lastmonthcss,
    today = new Date(),
    i, j; 
    if (mode === 'week') {
    thedate = new Date(date);
    thedate.setDate(date.getDate() - date.getDay());
    first = new Date(thedate);
    last = new Date(thedate);
    last.setDate(last.getDate()+6);
    } else if (mode === 'day') {
    thedate = new Date(date);
    first = new Date(thedate);
    last = new Date(thedate);
    last.setDate(thedate.getDate() + 1);
    }

    }}
    <table class="calendar-table table table-condensed table-tight">
    <thead>
    <tr>
    <td colspan="7" style="text-align: center">
    <table style="white-space: nowrap; width: 100%">
    <tr>
    <td style="text-align: left;">
    <span class="btn-group">
    <button class="js-cal-prev btn btn-default"><</button>
    <button class="js-cal-next btn btn-default">></button>
    </span>
    <button class="js-cal-option btn btn-default {{: first.toDateInt() <= today.toDateInt() && today.toDateInt() <= last.toDateInt() ? 'active':'' }}" data-date="{{: today.toISOString()}}" data-mode="month">{{: todayname }}</button>
    </td>
    <td>
    <span class="btn-group btn-group-lg">
    {{ if (mode !== 'day') { }}
    {{ if (mode === 'month') { }}<button class="js-cal-option btn btn-link" data-mode="year">{{: months[month] }}</button>{{ } }}
    {{ if (mode ==='week') { }}
    <button class="btn btn-link disabled">{{: shortMonths[first.getMonth()] }} {{: first.getDate() }} - {{: shortMonths[last.getMonth()] }} {{: last.getDate() }}</button>
    {{ } }}
    <button class="js-cal-years btn btn-link">{{: year}}</button> 
    {{ } else { }}
    <button class="btn btn-link disabled">{{: date.toDateString() }}</button> 
    {{ } }}
    </span>
    </td>
    <td style="text-align: right">
    <span class="btn-group">
    <button class="js-cal-option btn btn-default {{: mode==='year'? 'active':'' }}" data-mode="year">Year</button>
    <button class="js-cal-option btn btn-default {{: mode==='month'? 'active':'' }}" data-mode="month">Month</button>
    <button class="js-cal-option btn btn-default {{: mode==='week'? 'active':'' }}" data-mode="week">Week</button>
    <button class="js-cal-option btn btn-default {{: mode==='day'? 'active':'' }}" data-mode="day">Day</button>
    </span>
    </td>
    </tr>
    </table>

    </td>
    </tr>
    </thead>
    {{ if (mode ==='year') {
    month = 0;
    }}
    <tbody>
    {{ for (j = 0; j < 3; j++) { }}
    <tr>
    {{ for (i = 0; i < 4; i++) { }}
    <td class="calendar-month month-{{:month}} js-cal-option" data-date="{{: new Date(year, month, 1).toISOString() }}" data-mode="month">
    {{: months[month] }}
    {{ month++;}}
    </td>
    {{ } }}
    </tr>
    {{ } }}
    </tbody>
    {{ } }}
    {{ if (mode ==='month' || mode ==='week') { }}
    <thead>
    <tr class="c-weeks">
    {{ for (i = 0; i < 7; i++) { }}
    <th class="c-name">
    {{: days[i] }}
    </th>
    {{ } }}
    </tr>
    </thead>
    <tbody>
    {{ for (j = 0; j < 6 && (j < 1 || mode === 'month'); j++) { }}
    <tr>
    {{ for (i = 0; i < 7; i++) { }}
    {{ if (thedate > last) { dayclass = nextmonthcss; } else if (thedate >= first) { dayclass = thismonthcss; } }}
    <td class="calendar-day {{: dayclass }} {{: thedate.toDateCssClass() }} {{: date.toDateCssClass() === thedate.toDateCssClass() ? 'selected':'' }} {{: daycss[i] }} js-cal-option" data-date="{{: thedate.toISOString() }}">
    <div class="date">{{: thedate.getDate() }}</div>
    {{ thedate.setDate(thedate.getDate() + 1);}}
    </td>
    {{ } }}
    </tr>
    {{ } }}
    </tbody>
    {{ } }}
    {{ if (mode ==='day') { }}
    <tbody>
    <tr>
    <td colspan="7">
    <table class="table table-striped table-condensed table-tight-vert" >
    <thead>
    <tr>
    <th> </th>
    <th style="text-align: center; width: 100%">{{: days[date.getDay()] }}</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <th class="timetitle" >All Day</th>
    <td class="{{: date.toDateCssClass() }}">  </td>
    </tr>
    <tr>
    <th class="timetitle" >Before 6 AM</th>
    <td class="time-0-0"> </td>
    </tr>
    {{for (i = 6; i < 22; i++) { }}
    <tr>
    <th class="timetitle" >{{: i <= 12 ? i : i - 12 }} {{: i < 12 ? "AM" : "PM"}}</th>
    <td class="time-{{: i}}-0"> </td>
    </tr>
    <tr>
    <th class="timetitle" >{{: i <= 12 ? i : i - 12 }}:30 {{: i < 12 ? "AM" : "PM"}}</th>
    <td class="time-{{: i}}-30"> </td>
    </tr>
    {{ } }}
    <tr>
    <th class="timetitle" >After 10 PM</th>
    <td class="time-22-0"> </td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    {{ } }}
    </table>
</script>



<script>
    var $currentPopover = null;
    $(document).on('shown.bs.popover', function (ev) {
        var $target = $(ev.target);
        if ($currentPopover && ($currentPopover.get(0) != $target.get(0))) {
            $currentPopover.popover('toggle');
        }
        $currentPopover = $target;
    }).on('hidden.bs.popover', function (ev) {
        var $target = $(ev.target);
        if ($currentPopover && ($currentPopover.get(0) == $target.get(0))) {
            $currentPopover = null;
        }
    });


//quicktmpl is a simple template language I threw together a while ago; it is not remotely secure to xss and probably has plenty of bugs that I haven't considered, but it basically works
//the design is a function I read in a blog post by John Resig (http://ejohn.org/blog/javascript-micro-templating/) and it is intended to be loosely translateable to a more comprehensive template language like mustache easily
    $.extend({
        quicktmpl: function (template) {
            return new Function("obj", "var p=[],print=function(){p.push.apply(p,arguments);};with(obj){p.push('" + template.replace(/[\r\t\n]/g, " ").split("{{").join("\t").replace(/((^|\}\})[^\t]*)'/g, "$1\r").replace(/\t:(.*?)\}\}/g, "',$1,'").split("\t").join("');").split("}}").join("p.push('").split("\r").join("\\'") + "');}return p.join('');")
        }
    });

    $.extend(Date.prototype, {
        //provides a string that is _year_month_day, intended to be widely usable as a css class
        toDateCssClass: function () {
            return '_' + this.getFullYear() + '_' + (this.getMonth() + 1) + '_' + this.getDate();
        },
        //this generates a number useful for comparing two dates; 
        toDateInt: function () {
            return ((this.getFullYear() * 12) + this.getMonth()) * 32 + this.getDate();
        },
        toTimeString: function () {
            var hours = this.getHours(),
                    minutes = this.getMinutes(),
                    hour = (hours > 12) ? (hours - 12) : hours,
                    ampm = (hours >= 12) ? ' pm' : ' am';
            if (hours === 0 && minutes === 0) {
                return '';
            }
            if (minutes > 0) {
                return hour + ':' + minutes + ampm;
            }
            return hour + ampm;
        }
    });


    (function ($) {

        //t here is a function which gets passed an options object and returns a string of html. I am using quicktmpl to create it based on the template located over in the html block
        var t = $.quicktmpl($('#tmpl').get(0).innerHTML);

        function calendar($el, options) {
            //actions aren't currently in the template, but could be added easily...
            $el.on('click', '.js-cal-prev', function () {
                switch (options.mode) {
                    case 'year':
                        options.date.setFullYear(options.date.getFullYear() - 1);
                        break;
                    case 'month':
                        options.date.setMonth(options.date.getMonth() - 1);
                        break;
                    case 'week':
                        options.date.setDate(options.date.getDate() - 7);
                        break;
                    case 'day':
                        options.date.setDate(options.date.getDate() - 1);
                        break;
                }
                draw();
            }).on('click', '.js-cal-next', function () {
                switch (options.mode) {
                    case 'year':
                        options.date.setFullYear(options.date.getFullYear() + 1);
                        break;
                    case 'month':
                        options.date.setMonth(options.date.getMonth() + 1);
                        break;
                    case 'week':
                        options.date.setDate(options.date.getDate() + 7);
                        break;
                    case 'day':
                        options.date.setDate(options.date.getDate() + 1);
                        break;
                }
                draw();
            }).on('click', '.js-cal-option', function () {
                var $t = $(this), o = $t.data();
                if (o.date) {
                    o.date = new Date(o.date);
                }
                $.extend(options, o);
                draw();
            }).on('click', '.js-cal-years', function () {
                var $t = $(this),
                        haspop = $t.data('popover'),
                        s = '',
                        y = options.date.getFullYear() - 2,
                        l = y + 5;
                if (haspop) {
                    return true;
                }
                for (; y < l; y++) {
                    s += '<button type="button" class="btn btn-default btn-lg btn-block js-cal-option" data-date="' + (new Date(y, 1, 1)).toISOString() + '" data-mode="year">' + y + '</button>';
                }
                $t.popover({content: s, html: true, placement: 'auto top'}).popover('toggle');
                return false;
            }).on('click', '.event', function () {
                var $t = $(this),
                        index = +($t.attr('data-index')),
                        haspop = $t.data('popover'),
                        data, time;

                if (haspop || isNaN(index)) {
                    return true;
                }
                data = options.data[index];
                time = data.start.toTimeString();
                if (time && data.end) {
                    time = time + ' - ' + data.end.toTimeString();
                }
                $t.data('popover', true);
                $t.popover({content: '<p><strong>' + time + '</strong></p>' + data.text, html: true, placement: 'auto left'}).popover('toggle');
                return false;
            });
            function dayAddEvent(index, event) {
                if (!!event.allDay) {
                    monthAddEvent(index, event);
                    return;
                }
                var $event = $('<div/>', {'class': 'event', text: event.title, title: event.title, 'data-index': index}),
                        start = event.start,
                        end = event.end || start,
                        time = event.start.toTimeString(),
                        hour = start.getHours(),
                        timeclass = '.time-22-0',
                        startint = start.toDateInt(),
                        dateint = options.date.toDateInt(),
                        endint = end.toDateInt();
                if (startint > dateint || endint < dateint) {
                    return;
                }

                if (!!time) {
                    $event.html('<strong>' + time + '</strong> ' + $event.html());
                }
                $event.toggleClass('begin', startint === dateint);
                $event.toggleClass('end', endint === dateint);
                if (hour < 6) {
                    timeclass = '.time-0-0';
                }
                if (hour < 22) {
                    timeclass = '.time-' + hour + '-' + (start.getMinutes() < 30 ? '0' : '30');
                }
                $(timeclass).append($event);
            }

            function monthAddEvent(index, event) {
                var $event = $('<div/>', {'class': 'event', text: event.title, title: event.title, 'data-index': index}),
                        e = new Date(event.start),
                        dateclass = e.toDateCssClass(),
                        day = $('.' + e.toDateCssClass()),
                        empty = $('<div/>', {'class': 'clear event', html: ' '}),
                        numbevents = 0,
                        time = event.start.toTimeString(),
                        endday = event.end && $('.' + event.end.toDateCssClass()).length > 0,
                        checkanyway = new Date(e.getFullYear(), e.getMonth(), e.getDate() + 40),
                        existing,
                        i;
                $event.toggleClass('all-day', !!event.allDay);
                if (!!time) {
                    $event.html('<strong>' + time + '</strong> ' + $event.html());
                }
                if (!event.end) {
                    $event.addClass('begin end');
                    $('.' + event.start.toDateCssClass()).append($event);
                    return;
                }

                while (e <= event.end && (day.length || endday || options.date < checkanyway)) {
                    if (day.length) {
                        existing = day.find('.event').length;
                        numbevents = Math.max(numbevents, existing);
                        for (i = 0; i < numbevents - existing; i++) {
                            day.append(empty.clone());
                        }
                        day.append(
                                $event.
                                toggleClass('begin', dateclass === event.start.toDateCssClass()).
                                toggleClass('end', dateclass === event.end.toDateCssClass())
                                );
                        $event = $event.clone();
                        $event.html(' ');
                    }
                    e.setDate(e.getDate() + 1);
                    dateclass = e.toDateCssClass();
                    day = $('.' + dateclass);
                }
            }
            function yearAddEvents(events, year) {
                var counts = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
                $.each(events, function (i, v) {
                    if (v.start.getFullYear() === year) {
                        counts[v.start.getMonth()]++;
                    }
                });
                $.each(counts, function (i, v) {
                    if (v !== 0) {
                        $('.month-' + i).append('<span class="badge">' + v + '</span>');
                    }
                });
            }

            function draw() {
                $el.html(t(options));
                //potential optimization (untested), this object could be keyed into a dictionary on the dateclass string; the object would need to be reset and the first entry would have to be made here
                $('.' + (new Date()).toDateCssClass()).addClass('today');
                if (options.data && options.data.length) {
                    if (options.mode === 'year') {
                        yearAddEvents(options.data, options.date.getFullYear());
                    } else if (options.mode === 'month' || options.mode === 'week') {
                        $.each(options.data, monthAddEvent);
                    } else {
                        $.each(options.data, dayAddEvent);
                    }
                }
            }

            draw();
        }

        ;
        (function (defaults, $, window, document) {
            $.extend({
                calendar: function (options) {
                    return $.extend(defaults, options);
                }
            }).fn.extend({
                calendar: function (options) {
                    options = $.extend({}, defaults, options);
                    return $(this).each(function () {
                        var $this = $(this);
                        calendar($this, options);
                    });
                }
            });
        })({
            days: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
            months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            shortMonths: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            date: (new Date()),
            daycss: ["c-sunday", "", "", "", "", "", "c-saturday"],
            todayname: "Hoy",
            thismonthcss: "current",
            lastmonthcss: "outside",
            nextmonthcss: "outside",
            mode: "month",
            data: []
        }, jQuery, window, document);

    })(jQuery);

    var data = [],
            date = new Date(),
            d = date.getDate(),
            d1 = d,
            m = date.getMonth(),
            y = date.getFullYear(),
            i,
            end,
            j,
            c = 1063,
            c1 = 3329,
            h,
            m,
            names = ['All Day Event', 'Long Event', 'Birthday Party', 'Repeating Event', 'Training', 'Meeting', 'Mr. Behnke', 'Date', 'Ms. Tubbs'],
            slipsum = ["Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.", "You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic.", "Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.", "Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing.", "Yeah, I like animals better than people sometimes... Especially dogs. Dogs are the best. Every time you come home, they act like they haven't seen you in a year. And the good thing about dogs... is they got different dogs for different people. Like pit bulls. The dog of dogs. Pit bull can be the right man's best friend... or the wrong man's worst enemy. You going to give me a dog for a pet, give me a pit bull. Give me... Raoul. Right, Omar? Give me Raoul.", "Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price.", "You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.", "You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic.", "Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price.", "You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man."];

    for (i = 0; i < 500; i++) {
        j = Math.max(i % 15 - 10, 0);
        //c and c1 jump around to provide an illusion of random data
        c = (c * 1063) % 1061;
        c1 = (c1 * 3329) % 3331;
        d = (d1 + c + c1) % 839 - 440;
        h = i % 36;
        m = (i % 4) * 15;
        if (h < 18) {
            h = 0;
            m = 0;
        } else {
            h = Math.max(h - 24, 0) + 8;
        }
        end = !j ? null : new Date(y, m, d + j, h + 2, m);
        data.push({title: names[c1 % names.length], start: new Date(y, m, d, h, m), end: end, allDay: !(i % 6), text: slipsum[c % slipsum.length ]});
    }

    data.sort(function (a, b) {
        return (+a.start) - (+b.start);
    });

//data must be sorted by start date

//Actually do everything
    $('#holder').calendar({
        data: data
    });
</script>
<br><br><br><br><br>
<div class="container">


    <div class="container">
        <div class="row">
            <div class="[ col-xs-12 col-sm-offset-1 col-sm-5 ]">
                <div class="[ panel panel-default ] panel-google-plus">
                    <div class="panel-heading">
                        <h3>Equipo A Vs Equipo B</h3>
                        <h5><span>Futbol 8</span> - <span>Febrero 27, 2018</span> </h5>
                    </div>
                    <div class="panel-body">
                        <span>Entidad 1 -- Entidad 2</span>
                        <span>Hora: 14:00</span>
                        <span>Ubicación: Estadio El Campin</span>
                    </div>
                </div>
                <div class="[ panel panel-default ] panel-google-plus">
                    <div class="panel-heading">
                        <h3>Equipo A Vs Equipo B</h3>
                        <h5><span>Futbol 8</span> - <span>Febrero 27, 2018</span> </h5>
                    </div>
                    <div class="panel-body">
                        <span>Entidad 1 -- Entidad 2</span>
                        <span>Hora: 14:00</span>
                        <span>Ubicación: Estadio El Campin</span>
                    </div>
                </div>
                <div class="[ panel panel-default ] panel-google-plus">
                    <div class="panel-heading">
                        <h3>Equipo A Vs Equipo B</h3>
                        <h5><span>Futbol 8</span> - <span>Febrero 27, 2018</span> </h5>
                    </div>
                    <div class="panel-body">
                        <span>Entidad 1 -- Entidad 2</span>
                        <span>Hora: 14:00</span>
                        <span>Ubicación: Estadio El Campin</span>
                    </div>
                </div>
                <div class="[ panel panel-default ] panel-google-plus">
                    <div class="panel-heading">
                        <h3>Equipo A Vs Equipo B</h3>
                        <h5><span>Futbol 8</span> - <span>Febrero 27, 2018</span> </h5>
                    </div>
                    <div class="panel-body">
                        <span>Entidad 1 -- Entidad 2</span>
                        <span>Hora: 14:00</span>
                        <span>Ubicación: Estadio El Campin</span>
                    </div>
                </div>
                <div class="[ panel panel-default ] panel-google-plus">
                    <div class="panel-heading">
                        <h3>Equipo A Vs Equipo B</h3>
                        <h5><span>Futbol 8</span> - <span>Febrero 27, 2018</span> </h5>
                    </div>
                    <div class="panel-body">
                        <span>Entidad 1 -- Entidad 2</span>
                        <span>Hora: 14:00</span>
                        <span>Ubicación: Estadio El Campin</span>
                    </div>
                </div>
                <div class="[ panel panel-default ] panel-google-plus">
                    <div class="panel-heading">
                        <h3>Equipo A Vs Equipo B</h3>
                        <h5><span>Futbol 8</span> - <span>Febrero 27, 2018</span> </h5>
                    </div>
                    <div class="panel-body">
                        <span>Entidad 1 -- Entidad 2</span>
                        <span>Hora: 14:00</span>
                        <span>Ubicación: Estadio El Campin</span>
                    </div>
                </div>
                <div class="[ panel panel-default ] panel-google-plus">
                    <div class="panel-heading">
                        <h3>Equipo A Vs Equipo B</h3>
                        <h5><span>Futbol 8</span> - <span>Febrero 27, 2018</span> </h5>
                    </div>
                    <div class="panel-body">
                        <span>Entidad 1 -- Entidad 2</span>
                        <span>Hora: 14:00</span>
                        <span>Ubicación: Estadio El Campin</span>
                    </div>
                </div>
                <div class="[ panel panel-default ] panel-google-plus">
                    <div class="panel-heading">
                        <h3>Equipo A Vs Equipo B</h3>
                        <h5><span>Futbol 8</span> - <span>Febrero 27, 2018</span> </h5>
                    </div>
                    <div class="panel-body">
                        <span>Entidad 1 -- Entidad 2</span>
                        <span>Hora: 14:00</span>
                        <span>Ubicación: Estadio El Campin</span>
                    </div>
                </div>
            </div>

            <div class="[ col-xs-12 col-sm-5 ]">
                <div class="[ panel panel-default ] panel-google-plus">

                    <div class="panel-heading" >
                        <h3>Iniciar Sesión en SIGTOR</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div >
                                <?php if (isset($_COOKIE['password_updated'])): ?>
                                    <div class="alert alert-success">
                                        <p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
                                        <p>Pruebe iniciar sesion con su nueva contraseña.</p>

                                    </div>
                                    <?php
                                    setcookie("password_updated", "", time() - 18600);
                                endif;
                                ?>
                                <div class="card">
                                    <div class="card-header" data-background-color="blue">
                                        <h4 class="title"><center>Acceder</center></h4>
                                    </div>
                                    <div class="card-content table-responsive">
                                        <form accept-charset="UTF-8" role="form" method="post" action="index.php?view=processlogin">
                                            <fieldset>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Usuario" name="mail" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
                                                </div>
                                                <input class="btn btn-primary btn-block" type="submit" value="Iniciar Sesion">
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="[ panel panel-default ] panel-google-plus">

                    <div class="panel-heading" >
                        <h3>Tabla de Posiciones</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <table class="table table-stripped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre Equipo</th>
                                        <th>PG</th>
                                        <th>PE</th>
                                        <th>PP</th>
                                        <th>DG</th>
                                        <th>P</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Equipo A</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>8</td>
                                    </tr>   
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Equipo B</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Equipo C</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Equipo D</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Equipo E</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Equipo F</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Equipo G</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Equipo H</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Equipo I</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Equipo J</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>Equipo K</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td>Equipo L</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="index-link">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="link-area">
                        <h3 style="color: #fff;font-size: 14px;border-bottom: 1px solid;">ALCALDÍA MAYOR DE BOGOTÁ</h3>
                        <li style="color: white;"><a href="http://bogota.gov.co" target="_blank" style="color: white;">Portal Bogotá</a></li>
                        <li style="color: white;"><a href="http://secretariageneralalcaldiamayor.gov.co/" target="_blank" style="color: white;">Secretaría General</a></li>
                        <li style="color: white;"><a href="http://sdmujer.gov.co/" target="_blank" style="color: white;">Secretaría de la Mujer</a></li>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="link-area">
                        <h3 style="color: #fff;font-size: 14px;border-bottom: 1px solid;">ENTIDADES DE CONTROL </h3>
                        <li style="color: white;"><a href="http://bogota.gov.co" target="_blank" style="color: white;">Portal Bogotá</a></li>
                        <li style="color: white;"><a href="http://secretariageneralalcaldiamayor.gov.co/" target="_blank" style="color: white;">Secretaría General</a></li>
                        <li style="color: white;"><a href="http://sdmujer.gov.co/" target="_blank" style="color: white;">Secretaría de la Mujer</a></li>
                        <li style="color: white;"><a href="http://sdmujer.gov.co/" target="_blank" style="color: white;">Secretaría de la Mujer</a></li>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="link-area">
                        <h3 style="color: #fff;font-size: 14px;border-bottom: 1px solid;">VÍNCULOS DE INTERÉS</h3>
                        <li style="color: white;"><a href="http://bogota.gov.co" target="_blank" style="color: white;">Portal Bogotá</a></li>
                        <li style="color: white;"><a href="http://secretariageneralalcaldiamayor.gov.co/" target="_blank" style="color: white;">Secretaría General</a></li>
                        <li style="color: white;"><a href="http://sdmujer.gov.co/" target="_blank" style="color: white;">Secretaría de la Mujer</a></li>
                        <li style="color: white;"><a href="http://sdmujer.gov.co/" target="_blank" style="color: white;">Secretaría de la Mujer</a></li>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="link-area">
                        <h3 style="color: #fff;font-size: 14px;border-bottom: 1px solid;">GOBIERNO EN LÍNEA </h3>
                        <li style="color: white;"><a href="http://bogota.gov.co" target="_blank" style="color: white;">Portal Bogotá</a></li>
                        <li style="color: white;"><a href="http://secretariageneralalcaldiamayor.gov.co/" target="_blank" style="color: white;">Secretaría General</a></li>
                        <li style="color: white;"><a href="http://sdmujer.gov.co/" target="_blank" style="color: white;">Secretaría de la Mujer</a></li>
                        <li style="color: white;"><a href="http://sdmujer.gov.co/" target="_blank" style="color: white;">Secretaría de la Mujer</a></li>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/>
    </section>
    <section class="index-social">
        <div class="container">
            <div class="row index-social-link text-center">
                <p class="copy-c">Departamento Administrativo del Servicio Civil Distrital</p>
            </div>
        </div>
    </section>
</div>
