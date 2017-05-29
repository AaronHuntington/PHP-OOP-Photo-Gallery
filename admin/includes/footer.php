        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- WYSIWYG -->
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Views',     <?php echo $session->count; ?>],
                    ['Comments', <?php echo comment::count_all(); ?>],
                    ['Users',  <?php echo user::count_all(); ?>],
                    ['Photos', <?php echo photo::count_all(); ?>]
                ]);

                var options = {
                    legend: 'none',
                    pieSliceText: 'label',
                    title: 'My Daily Activities',
                    backgroundColor: 'transparent'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
        </script>
    </body>

</html>
