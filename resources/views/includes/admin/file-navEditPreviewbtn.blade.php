<a href="{{ url($url) }}" class="btn btn-primary px-5"><i class="fa-solid fa-chart-simple"></i> Dashboard</a>
<a href="{{ url($url.'/preview/'.$id->id . '-' . str_replace(' ', '-', $id->title)) }}" class="btn btn-primary px-5"><i class="fa-solid fa-eye"></i> Preview</a>
<a href="{{ url($url.'/region/'.$id->id . '-' . str_replace(' ', '-', $id->title)) }}" class="btn btn-primary px-5"><i class="fa-solid fa-earth-africa"></i> Region</a>
<a href="{{ url($url.'/edit/'.$id->id . '-' . str_replace(' ', '-', $id->title)) }}" class="btn btn-primary px-5"><i class="fa-solid fa-file-pen"></i> Edit</a>