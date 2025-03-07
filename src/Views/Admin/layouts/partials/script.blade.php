<script src="{{ asset('assets/admin/js/jquery1-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/popper1.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/metisMenu.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/count_up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/chartlist/Chart.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/count_up/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/datatable/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/datepicker/datepicker.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/datepicker/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/datepicker/datepicker.custom.js') }}"></script>
<script src="{{ asset('assets/admin/js/chart.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/chartjs/roundedBar.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/progressbar/jquery.barfiller.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/tagsinput/tagsinput.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/text_editor/summernote-bs4.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/am_chart/amcharts.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/scroll/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/scroll/scrollable-custom.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/vectormap-home/vectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/vectormap-home/vectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/apex_chart/apex-chart2.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/apex_chart/apex_dashboard.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/echart/echarts.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/chart_am/core.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/chart_am/charts.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/chart_am/animated.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/chart_am/kelly.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/chart_am/chart-custom.js') }}"></script>
<script src="{{ asset('assets/admin/js/dashboard_init.js') }}"></script>
<script src="{{ asset('assets/admin/js/custom.js') }}"></script>
<script>
   document.addEventListener('DOMContentLoaded', function () {
            @if (!empty($productCountByCategory))
                const productChartCanvas = document.getElementById('productChart').getContext('2d');
                const productCounts = {!! json_encode(array_map('intval', array_column($productCountByCategory, 'product_count'))) !!}; 

                const productChart = new Chart(productChartCanvas, {
                    type: 'bar',
                    data: {
                        labels: {!! json_encode(array_column($productCountByCategory, 'category_name')) !!},
                        datasets: [{
                            label: 'Số lượng sản phẩm',
                            data: productCounts,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                min: 0,
                                suggestedMin: 0,
                                suggestedMax: undefined, 
                                ticks: {
                                    callback: function(value, index, values) {
                                        return Number.isInteger(value) ? value : null;
                                    }
                                }
                            }
                        }
                    }
                });
            @endif
        });
</script>