<form action="{{ route('admin.courses.destroy', $course) }}" method="POST" 
      onsubmit="return confirm('Are you sure you want to delete this course?');">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Course</button>
</form>