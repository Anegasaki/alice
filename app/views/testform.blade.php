<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="{{url()}}/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="{{url()}}/js/AjaxTest.js"></script>
</head>
<body>
    {{ Form::open(['action' => 'Ajax\AjaxTestController@anyAjaxTest']) }}
    <table>
    <tr>
        <th>TEST&nbsp;A</th>
        <th>TEST&nbsp;B</th>
        <th>TEST&nbsp;C</th>
        <th></th>
    </tr>
    <tr>
        <td>
            {{ Form::text('test_a', 
                empty($params['test_a'])?'':$params['test_a'],
                ['id' => 'test_a']
            ) }}
        </td>
        <td>
            {{ Form::text('test_b', 
                empty($params['test_b'])?'':$params['test_b'],
                ['id' => 'test_b']
            ) }}
        </td>
        <td>
            {{ Form::text('test_c', 
                empty($params['test_c'])?'':$params['test_c'],
                ['id' => 'test_c']
            ) }}
        </td>
        <td>
            <button type="button" onclick="AjaxTest();">テスト送信</button>
        </td>
    </tr>
    </table>
    {{ Form::close() }}
</body>
</html>
