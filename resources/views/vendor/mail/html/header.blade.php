@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://barataosolar.com.br/storage/config/logo/66b4d3d64d23e.jpg" class="logo" alt="Baratão Solar">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
