<!DOCTYPE html>
<html lang="en">
<head>
	 <title>@yield('title')</title>
	 @include('admin.include.head')
	 @stack('css')
</head>

<body>

  @include('admin.include.header')
  
  @include('admin.include.aside')
 
  <main id="main" class="main">
	@yield('contents')
  </main>
  
  @include('admin.include.footer')
  
  @include('admin.include.scripts')
  
  @stack('js')
  
</body>
</html>