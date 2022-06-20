<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
New Post Alert!
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
