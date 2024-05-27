<table class="table">
    <thead>
        <tr>
            <th style="width: 20%;">Month</th>
            <th>Series Name</th>
        </tr>
    </thead>
    <tbody>
        @isset($data['seriesMapProto'])
            @foreach ($data['seriesMapProto'] as $item)
                <tr class="mb-2">
                    <td rowspan="{{ count($item['series']) }}">{{ $item['date'] }}</td>
                    <td class="border-bottom">{{ $item['series'][0]['name'] }}</td>
                </tr>
                @for ($i = 1; $i < count($item['series']); $i++)
                    <tr class="mb-2">
                        <td class="border-bottom">{{ $item['series'][$i]['name'] }}</td>
                    </tr>
                @endfor
            @endforeach
        @endisset
    </tbody>
</table>