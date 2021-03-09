<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="main" style="height: 600px;width: 600px"></div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.js"></script>
<script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.js"></script>
<script>
    axios.get('api.php').then(res => {
        echarts.init(document.getElementById('main')).setOption({
            dataset: {
                source: res.data
            },
            xAxis: {type: 'category'},
            yAxis: {},
            series: [
                {type: 'bar'},
                {type: 'bar'},
                {type: 'bar'}
            ]
        })
    })
</script>
</body>
</html>

