
{{-- @includeif('subview.Menb') --}}

{{-- @includeFirst(['subview.Footer', 'subview.Menu']) --}}

{{-- @includeWhen(true, 'subview.Menu')
@includeWhen(false, 'subview.Menu') --}}

{{-- @includeUnless(true, 'subview.Menu') --}}

@includeUnless(false, 'subview.Menu')