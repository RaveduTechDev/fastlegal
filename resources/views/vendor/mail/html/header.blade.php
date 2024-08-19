@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Fast Legal Indonesia')
                <img src="https://fastlegal.id/assets/img/F.png" style="width:100%; height:auto" class="logo"
                    alt="Fast Legal Logo ">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
