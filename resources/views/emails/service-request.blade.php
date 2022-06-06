<table>
    <tr>
        <td>Nombre: </td>
        <td>{{ $data['name'] }}</td>
    </tr>
    <tr>
        <td>Teléfono: </td>
        <td>{{ $data['telephone'] }}</td>
    </tr>
    <tr>
        <td>Tipo de persona: </td>
        <td>{{ $data['person'] }}</td>
    </tr>
    @if(isset($data['business-name']))
    <tr>
        <td>Razón social: </td>
        <td>{{ $data['business-name'] }}</td>
    </tr>
    @endif

    <tr>
        <td>Cilindro, granel, instalaciones: </td>
        <td>{{ $data['type'] }}</td>
    </tr>

    {{-- Cilindro --}}
    @if($data['type'] == 'cilindro')
    <tr>
        <td>Cantidad: </td>
        <td>{{ $data['quantity'] }}</td>
    </tr>
    <tr>
        <td>Presentación / Volumen: </td>
        <td>{{ $data['volume'] }}</td>
    </tr>
    @endif
    {{-- End Cilindro --}}

    {{-- Granel --}}
    @if($data['type'] == 'granel')
    <tr>
        <td>Kilos: </td>
        <td>{{ $data['kilos'] }}</td>
    </tr>
    <tr>
        <td>Presentación / Volumen: </td>
        <td>{{ $data['volume'] }}</td>
    </tr>
    @endif
    {{-- End Granel --}}

    {{-- Granel --}}
    @if($data['type'] == 'instalaciones')
    <tr>
        <td>Uso: </td>
        <td>{{ $data['use'] }}</td>
    </tr>
    <tr>
        <td>Description: </td>
        <td>{{ $data['description'] }}</td>
    </tr>
    @endif
    {{-- End Granel --}}


</table>
