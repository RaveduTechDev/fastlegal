@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Fast Legal Indonesia')
                <img src="https://v2.fastlegal.id/assets/img/F.png" style="width:100%; height:auto" class="logo" alt="Laravel Logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
