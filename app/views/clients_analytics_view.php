<style>
    .Chartjs{
        margin:10px 0;
        padding:10px;
        background: #fff;
        border:1px solid #d4d2d0;
        border-radius:10px;
    }
</style>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/agency/dashboard" class="site_title"><i class="fa fa-paw"></i> <span>Jointoit!</span></a>
            </div>

            <div class="clearfix"></div>



            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                <!--   <li><a><i class="fa fa-home"></i> Clients <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#" class="edit-client" data-toggle="modal" class="edit-button" data-target="#client" >Add new clients</a></li>
                      <li><a href="/agency/allclients">List of clients</a></li>
                    </ul>
                  </li> -->
                  <li><a><i class="fa fa-edit"></i> Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Setting Form 1</a></li>
                      <li><a href="#">Setting Form 2</a></li>
                      <li><a href="#">Setting Form 3</a></li>
                      <li><a href="#">Setting Form 4</a></li>
                      <li><a href="#">Setting Form 5</a></li>
                      <!-- <li><a href="form_buttons.html">Form Buttons</a></li> -->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/client/clientanalytics?id=<?=$_GET['id'] ?>">Reports 1</a></li>
                      <li><a href="/client/clientanalyticspdf?id=<?=$_GET['id'] ?>">Reports 1 PDF</a></li>
                      <li><a href="#">Reports 3</a></li>
                      <li><a href="#">Reports 4</a></li>
                      <li><a href="#">Reports 5</a></li>
                      <li><a href="#">Reports 6</a></li>
                      <li><a href="#">Reports 7</a></li>
 <!--                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li> -->
                    </ul>
                  </li>
             
                </ul>
              </div>
       

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">

                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $host.'/'.$data['info']['imglogo']?>" alt=""><?php echo $data['info']['name_agency'];?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo $host.'/agency/infagency'?>"> Profile</a></li>
                  <!--   <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li> -->
                    <!-- <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="<?php echo $host.'/'.'index/logout'; ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li>
                    <a href="#" class="edit-client" data-toggle="modal" class="edit-button" data-target="#client" >
                      <!-- <span class="badge bg-red pull-right">50%</span> -->
                      <span>Add new client</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $host.'/'.'agency/dashboard'; ?>">
                      <!-- <span class="badge bg-red pull-right">50%</span> -->
                      <span>All clients</span>
                    </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post" id="form">
                <input type="hidden" name="client_id" placeholder="client_id" id="client_id" value="<?=$_GET['id'] ?>">
                <input type="hidden" name="api_name" placeholder="api_name" id="api_name" value="api_analitics">
            </form>

            <script>
                (function(w,d,s,g,js,fs){
                    g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
                    js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
                    js.src='https://apis.google.com/js/platform.js';
                    fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
                }(window,document,'script'));
            </script>

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#general">Client Analytics - General</a></li>
                <li><a data-toggle="tab" href="#channels" id="li-channels">Channels</a></li>
                <li><a data-toggle="tab" href="#audience">Audience</a></li>
            </ul>

            <div class="tab-content">
                <div id="general" class="tab-pane fade in active">
                    <h2>Client Analytics - General</h2>

                    <header>
                        <div id="embed-api-auth-container"></div>
                        <div id="view-selector-container" style="display:none;"></div>
                        <div id="view-name"></div>
                        <div id="active-users-container"></div>
                    </header>

                    <div id="chart-container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="Chartjs">
                                    <h3>This Week vs Last Week (by sessions)</h3>
                                    <figure class="Chartjs-figure" id="chart-1-container"></figure>
                                    <ol class="Chartjs-legend" id="legend-1-container"></ol>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="Chartjs">
                                    <h3>This Year vs Last Year (by users)</h3>
                                    <figure class="Chartjs-figure" id="chart-2-container"></figure>
                                    <ol class="Chartjs-legend" id="legend-2-container"></ol>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="Chartjs">
                                    <h3>Top Browsers (by pageview)</h3>
                                    <figure class="Chartjs-figure" id="chart-3-container"></figure>
                                    <ol class="Chartjs-legend" id="legend-3-container"></ol>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="Chartjs">
                                    <h3>Top Countries (by sessions)</h3>
                                    <figure class="Chartjs-figure" id="chart-4-container"></figure>
                                    <ol class="Chartjs-legend" id="legend-4-container"></ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="channels" class="tab-pane fade">
                    <h2>Client Analytics - Channels</h2>
                    <div id="chart-container-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="Chartjs">
                                    <h3>Sessions</h3>
                                    <figure class="Chartjs-figure" id="chart-5-container"></figure>
                                    <ol class="Chartjs-legend" id="legend-5-container"></ol>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="Chartjs">
                                    <h3>Channels</h3>
                                    <figure class="Chartjs-figure" id="chart-6-container"></figure>
                                    <ol class="Chartjs-legend" id="legend-6-container"></ol>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="Chartjs">
                                    <h3>Channels</h3>
                                    <figure class="Chartjs-figure" id="chart-7-container"></figure>
                                    <ol class="Chartjs-legend" id="legend-7-container"></ol>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="Chartjs">
                                    <h3>Sessions</h3>
                                    <figure class="Chartjs-figure" id="chart-8-container"></figure>
                                    <ol class="Chartjs-legend" id="legend-8-container"></ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="audience" class="tab-pane fade">
                    <h2>Client Analytics - Audience</h2>
                    <!-- Some Chars here-->
                </div>
            </div>


            <!-- Include the ActiveUsers component script. -->
            <script src="<?=__HOST__?>/js/embed-api/components/active-users.js"></script>
            <!-- Include the ViewSelector2 component script. -->
            <script src="<?=__HOST__?>/js/embed-api/components/view-selector2.js"></script>

            <!-- Include the CSS that styles the charts. -->
            <link rel="stylesheet" href="<?=__HOST__?>/css/google-analytics/chartjs-visualizations.css">

            <script>

                // == NOTE ==
                // This code uses ES6 promises. If you want to use this code in a browser
                // that doesn't supporting promises natively, you'll have to include a polyfill.

                gapi.analytics.ready(function() {

                    /**
                     * Authorize the user immediately if the user has already granted access.
                     * If no access has been created, render an authorize button inside the
                     * element with the ID "embed-api-auth-container".
                     */
                    gapi.analytics.auth.authorize({
                        container: 'embed-api-auth-container',
                        clientid: '201890636942-vr0pgotfrschlt1p8o5q9v3u9bqhnmdu.apps.googleusercontent.com'
                    });

                    /**
                     * Create a new ActiveUsers instance to be rendered inside of an
                     * element with the id "active-users-container" and poll for changes every
                     * five seconds.
                     */
                    var activeUsers = new gapi.analytics.ext.ActiveUsers({
                        container: 'active-users-container',
                        pollingInterval: 5
                    });


                    /**
                     * Add CSS animation to visually show the when users come and go.
                     */
                    activeUsers.once('success', function() {
                        var element = this.container.firstChild;
                        var timeout;

                        this.on('change', function(data) {
                            var element = this.container.firstChild;
                            var animationClass = data.delta > 0 ? 'is-increasing' : 'is-decreasing';
                            element.className += (' ' + animationClass);

                            clearTimeout(timeout);
                            timeout = setTimeout(function() {
                                element.className =
                                    element.className.replace(/ is-(increasing|decreasing)/g, '');
                            }, 3000);
                        });
                    });



                    $.ajax({
                        type: "POST",
                        url: "/ajax/get_client_api_profile",
                        data: {val: $('#form').serialize() }
                    }).done(function( msg ) {
                        var data = $.parseJSON(msg);
                        $('#api_profile_id').val(data.api_profile_id);
                        $('#api_name').val(data.api_name);
                        $('#client_id').val(data.client_id);
                        console.log(data);

                        function escapeHtml(text) {
                            return text
                                .replace("%3A", ":");

                        }

                        /**
                         * Create a new ViewSelector2 instance to be rendered inside of an
                         * element with the id "view-selector-container".
                         */
                        var viewSelector = new gapi.analytics.ext.ViewSelector2({
                            container: 'view-selector-container',
                            ids: escapeHtml(data.api_profile_id)
                        })
                            .execute();
                        /**
                         * Update the activeUsers component, the Chartjs charts, and the dashboard
                         * title whenever the user changes the view.
                         */
                        viewSelector.on('viewChange', function(data) {
                            console.log(data);
                            window.UserInfo = data;
                            var title = document.getElementById('view-name');
                            title.textContent = data.property.name + ' (' + data.view.name + ')';

                            // Start tracking active users for this view.
                            activeUsers.set(data).execute();


                            // Render all the of charts for this view.
                            renderWeekOverWeekChart(data.ids);
                            renderYearOverYearChart(data.ids);
                            renderTopBrowsersChart(data.ids);
                            renderTopCountriesChart(data.ids);

                            // Tab 2 click
                            $('#li-channels').on('click', function(){
                                chart5(data.ids);
                                chart6(data.ids);
                            });

                        });
                    });

                    /**
                     * Chart 1
                     */
                    function renderWeekOverWeekChart(ids) {

                        // Adjust `now` to experiment with different days, for testing only...
                        var now = moment(); // .subtract(3, 'day');

                        var thisWeek = query({
                            'ids': ids,
                            'dimensions': 'ga:date,ga:nthDay',
                            'metrics': 'ga:sessions',
                            'start-date': moment(now).subtract(1, 'day').day(0).format('YYYY-MM-DD'),
                            'end-date': moment(now).format('YYYY-MM-DD')
                        });

                        var lastWeek = query({
                            'ids': ids,
                            'dimensions': 'ga:date,ga:nthDay',
                            'metrics': 'ga:sessions',
                            'start-date': moment(now).subtract(1, 'day').day(0).subtract(1, 'week')
                                .format('YYYY-MM-DD'),
                            'end-date': moment(now).subtract(1, 'day').day(6).subtract(1, 'week')
                                .format('YYYY-MM-DD')
                        });

                        Promise.all([thisWeek, lastWeek]).then(function(results) {

                            var data1 = results[0].rows.map(function(row) { return +row[2]; });
                            var data2 = results[1].rows.map(function(row) { return +row[2]; });
                            var labels = results[1].rows.map(function(row) { return +row[0]; });

                            labels = labels.map(function(label) {
                                return moment(label, 'YYYYMMDD').format('ddd');
                            });

                            var data = {
                                labels : labels,
                                datasets : [
                                    {
                                        label: 'Last Week',
                                        fillColor : 'rgba(220,220,220,0.5)',
                                        strokeColor : 'rgba(220,220,220,1)',
                                        pointColor : 'rgba(220,220,220,1)',
                                        pointStrokeColor : '#fff',
                                        data : data2
                                    },
                                    {
                                        label: 'This Week',
                                        fillColor : 'rgba(151,187,205,0.5)',
                                        strokeColor : 'rgba(151,187,205,1)',
                                        pointColor : 'rgba(151,187,205,1)',
                                        pointStrokeColor : '#fff',
                                        data : data1
                                    }
                                ]
                            };

                            new Chart(makeCanvas('chart-1-container')).Line(data);
                            generateLegend('legend-1-container', data.datasets);
                        });
                    }


                    /**
                     * Chart 2
                     */
                    function renderYearOverYearChart(ids) {

                        // Adjust `now` to experiment with different days, for testing only...
                        var now = moment(); // .subtract(3, 'day');

                        var thisYear = query({
                            'ids': ids,
                            'dimensions': 'ga:month,ga:nthMonth',
                            'metrics': 'ga:users',
                            'start-date': moment(now).date(1).month(0).format('YYYY-MM-DD'),
                            'end-date': moment(now).format('YYYY-MM-DD')
                        });

                        var lastYear = query({
                            'ids': ids,
                            'dimensions': 'ga:month,ga:nthMonth',
                            'metrics': 'ga:users',
                            'start-date': moment(now).subtract(1, 'year').date(1).month(0)
                                .format('YYYY-MM-DD'),
                            'end-date': moment(now).date(1).month(0).subtract(1, 'day')
                                .format('YYYY-MM-DD')
                        });

                        Promise.all([thisYear, lastYear]).then(function(results) {
                            var data1 = results[0].rows.map(function(row) { return +row[2]; });
                            var data2 = results[1].rows.map(function(row) { return +row[2]; });
                            var labels = ['Jan','Feb','Mar','Apr','May','Jun',
                                'Jul','Aug','Sep','Oct','Nov','Dec'];

                            // Ensure the data arrays are at least as long as the labels array.
                            // Chart.js bar charts don't (yet) accept sparse datasets.
                            for (var i = 0, len = labels.length; i < len; i++) {
                                if (data1[i] === undefined) data1[i] = null;
                                if (data2[i] === undefined) data2[i] = null;
                            }

                            var data = {
                                labels : labels,
                                datasets : [
                                    {
                                        label: 'Last Year',
                                        fillColor : 'rgba(220,220,220,0.5)',
                                        strokeColor : 'rgba(220,220,220,1)',
                                        data : data2
                                    },
                                    {
                                        label: 'This Year',
                                        fillColor : 'rgba(151,187,205,0.5)',
                                        strokeColor : 'rgba(151,187,205,1)',
                                        data : data1
                                    }
                                ]
                            };

                            new Chart(makeCanvas('chart-2-container')).Bar(data);
                            generateLegend('legend-2-container', data.datasets);
                        })
                            .catch(function(err) {
                                console.error(err.stack);
                            });
                    }


                    /**
                     * Chart 3
                     */
                    function renderTopBrowsersChart(ids) {

                        query({
                            'ids': ids,
                            'dimensions': 'ga:browser',
                            'metrics': 'ga:pageviews',
                            'sort': '-ga:pageviews',
                            'max-results': 5
                        })
                            .then(function(response) {

                                var data = [];
                                var colors = ['#4D5360','#949FB1','#D4CCC5','#E2EAE9','#F7464A'];

                                response.rows.forEach(function(row, i) {
                                    data.push({ value: +row[1], color: colors[i], label: row[0] });
                                });

                                new Chart(makeCanvas('chart-3-container')).Doughnut(data);
                                generateLegend('legend-3-container', data);
                            });
                    }


                    /**
                     * Chart 4
                     */
                    function renderTopCountriesChart(ids) {
                        query({
                            'ids': ids,
                            'dimensions': 'ga:country',
                            'metrics': 'ga:sessions',
                            'sort': '-ga:sessions',
                            'max-results': 5
                        })
                            .then(function(response) {

                                var data = [];
                                var colors = ['#4D5360','#949FB1','#D4CCC5','#E2EAE9','#F7464A'];

                                response.rows.forEach(function(row, i) {
                                    data.push({
                                        label: row[0],
                                        value: +row[1],
                                        color: colors[i]
                                    });
                                });

                                new Chart(makeCanvas('chart-4-container')).Doughnut(data);
                                generateLegend('legend-4-container', data);
                            });
                    }

                    /**
                     * Chart 5
                     */
                    function chart5(ids) {

                        // Adjust `now` to experiment with different days, for testing only...
                        var now = moment(); // .subtract(3, 'day');

                        var thisWeek = query({
                            'ids': ids,
                            'dimensions': 'ga:Date',
                            'metrics': 'ga:sessions',
                            'start-date': moment(now).subtract(1, 'day').day(0).format('YYYY-MM-DD'),
                            'end-date': moment(now).format('YYYY-MM-DD')
                        });

                        var lastMonth = query({
                            'ids': ids,
                            'dimensions': 'ga:Date,ga:Date',
                            'metrics': 'ga:sessions',
                            'start-date': moment(now).subtract(1, 'day').day(0).subtract(1, 'month').format('YYYY-MM-DD'),
                            'end-date': moment(now).subtract(1, 'day').day(30).subtract(1, 'month').format('YYYY-MM-DD')
                        });

                        Promise.all([thisWeek, lastMonth]).then(function(results) {

                            var data2 = results[1].rows.map(function(row) { return +row[2]; });
                            var labels = results[1].rows.map(function(row) { return +row[0]; });

                            labels = labels.map(function(label) {
                                return moment(label, 'YYYYMMDD').format('MMM DD');
                            });

                            var data = {
                                labels : labels,
                                datasets : [
                                    {
                                        label: 'Last Month',
                                        fillColor : 'rgba(220,220,220,0.5)',
                                        strokeColor : 'rgba(220,220,220,1)',
                                        pointColor : 'rgba(220,220,220,1)',
                                        pointStrokeColor : '#fff',
                                        data : data2
                                    },

                                ]
                            };

                            new Chart(makeCanvas('chart-5-container')).Bar(data);
                            generateLegend('legend-5-container', data.datasets);
                        });
                    }

                    /**
                     * Chart 6
                     */
                    function chart6(ids) {

                        query({
                            'ids': ids,
                            'dimensions': 'ga:source',
                            'metrics': 'ga:organicSearches',
                            'max-results': 5
                        })
                            .then(function(response) {

                                var data = [];
                                var colors = ['#4D5360','#949FB1','#D4CCC5','#E2EAE9','#F7464A'];

                                response.rows.forEach(function(row, i) {
                                    data.push({ value: +row[1], color: colors[i], label: row[0] });
                                });

                                new Chart(makeCanvas('chart-6-container')).Doughnut(data);
                                generateLegend('legend-6-container', data);
                            });
                    }


                    /**
                     * Extend the Embed APIs `gapi.analytics.report.Data` component to
                     * return a promise the is fulfilled with the value returned by the API.
                     * @param {Object} params The request parameters.
                     * @return {Promise} A promise.
                     */
                    function query(params) {
                        return new Promise(function(resolve, reject) {
                            var data = new gapi.analytics.report.Data({query: params});
                            data.once('success', function(response) { resolve(response); })
                                .once('error', function(response) { reject(response); })
                                .execute();
                        });
                    }


                    /**
                     * Create a new canvas inside the specified element. Set it to be the width
                     * and height of its container.
                     * @param {string} id The id attribute of the element to host the canvas.
                     * @return {RenderingContext} The 2D canvas context.
                     */
                    function makeCanvas(id) {
                        var container = document.getElementById(id);
                        var canvas = document.createElement('canvas');
                        var ctx = canvas.getContext('2d');

                        container.innerHTML = '';
                        canvas.width = container.offsetWidth;
                        canvas.height = container.offsetHeight;
                        container.appendChild(canvas);

                        return ctx;
                    }


                    /**
                     * Create a visual legend inside the specified element based off of a
                     * Chart.js dataset.
                     * @param {string} id The id attribute of the element to host the legend.
                     * @param {Array.<Object>} items A list of labels and colors for the legend.
                     */
                    function generateLegend(id, items) {
                        var legend = document.getElementById(id);
                        legend.innerHTML = items.map(function(item) {
                            var color = item.color || item.fillColor;
                            var label = item.label;
                            return '<li><i style="background:' + color + '"></i>' +
                                escapeHtml(label) + '</li>';
                        }).join('');
                    }


                    // Set some global Chart.js defaults.
                    Chart.defaults.global.animationSteps = 60;
                    Chart.defaults.global.animationEasing = 'easeInOutQuart';
                    Chart.defaults.global.responsive = true;
                    Chart.defaults.global.maintainAspectRatio = false;


                    /**
                     * Escapes a potentially unsafe HTML string.
                     * @param {string} str An string that may contain HTML entities.
                     * @return {string} The HTML-escaped string.
                     */
                    function escapeHtml(str) {
                        var div = document.createElement('div');
                        div.appendChild(document.createTextNode(str));
                        return div.innerHTML;
                    }

                });
            </script>
        </div>
    </div>
</div>


<div class="clearfix"></div>


        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Jointoit! <!-- <a href="https://colorlib.com">Colorlib</a> -->
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
