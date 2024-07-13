<h3 class="btn btn-success mt-2">All Practice Topics - Must Do</h3>
<div class="list-group rounded mb-4 bg-secondary">
  @php $classes = "list-group-item text-primary font-weight-bold"; @endphp
  <a href="{{ route('installation-process') }}" class="{{ $classes }}@if(Route::currentRouteName() == "installation-process") active @endif">Installation Process </a>
  <a href="{{ route('app-running-process') }}" class="{{ $classes }}@if(Route::currentRouteName() == "app-running-process") active @endif">App Running Process</a>
  <a href="{{ route('template-syntax-process') }}" class="{{ $classes }}@if(Route::currentRouteName() == "template-syntax-process") active @endif">Template Syntax Command</a>
  <a href="{{ route('computed-properties-process') }}" class="{{ $classes }}@if(Route::currentRouteName() == "computed-properties-process") active @endif">Computed Properties</a>
  <a href="{{ route('style-binding-process') }}" class="{{ $classes }}@if(Route::currentRouteName() == "style-binding-process") active @endif">Style Binding</a>  
  <a href="{{ route('class-binding-process') }}" class="{{ $classes }}@if(Route::currentRouteName() == "class-binding-process") active @endif">Class Binding</a>  
  <a href="{{ route('conditional-rendering-process') }}" class="{{ $classes }}@if(Route::currentRouteName() == "conditional-rendering-process") active @endif">Conditional Rendering</a>  
  <a href="{{ route('list-rendering-process') }}" class="{{ $classes }}@if(Route::currentRouteName() == "list-rendering-process") active @endif">List Rendering</a>  
  <a href="{{ route('event-handling-process') }}" class="{{ $classes }}@if(Route::currentRouteName() == "event-handling-process") active @endif">Event Handling</a>  
  <a href="{{ route('form-input-binding-process') }}" class="{{ $classes }}@if(Route::currentRouteName() == "form-input-binding-process") active @endif">Fomr Input Binding</a>  
  <a href="{{ route('lifecycle-hooks-process') }}" class="{{ $classes }}@if(Route::currentRouteName() == "lifecycle-hooks-process") active @endif">Lifecycle Hooks Process</a>  
  <a href="{{ route('watchers-process') }}" class="{{ $classes }}@if(Route::currentRouteName() == "watchers-process") active @endif">Watchers</a>  
  <a href="{{ route('template-refs-process') }}" class="{{ $classes }}@if(Route::currentRouteName() == "template-refs-process") active @endif">Template Refs</a>  
  <a href="{{ route('component-basics-process') }}" class="{{ $classes }}@if(Route::currentRouteName() == "component-basics-process") active @endif">Component Basics</a>  
</div>
<style>
.list-group-item {
  border-bottom: 3px solid #ffc107 !important;
}

.list-group-item:last-child {
  border: none !important;
}
</style>