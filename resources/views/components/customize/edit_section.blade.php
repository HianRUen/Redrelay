<div
   data-dialog-backdrop="{{$dialog}}"
   data-dialog-backdrop-close="true"
   class="hidden pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 backdrop-blur-sm p-4 text-gray-800"
>
   <div
      data-dialog="{{$dialog}}"
      class="relative min-w-[300px] max-w-[600px] w-full max-h-[calc(100vh-100px)] overflow-y-auto rounded-lg bg-white font-sans text-base leading-relaxed antialiased shadow-2xl p-4"
   >
      <div class="flex items-center justify-between mb-6">
         <p class="text-xl font-medium capitalize">Update {{$section->type}} Section</p>
         <span class=" text-4xl leading-none cursor-pointer" data-dialog-close="true">×</span>
      </div>
      
      
      <form method="POST" action="/inro-section/update/{{$section->id}}" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         
         <div class="mb-4">
            @include('components.input', [
               'id' => '',
               'type' => 'text',
               'name' => 'title',
               'value' => $section->title,
               'label' => 'Title',
               'fullWidth' => true,
               'required' => true,
               'flexLabel' => false,
               'disabled' => false,
               'error' => $errors->first('title'),
               'className' => 'h-12 px-6',
               'placeholder' => 'Section title',
            ])
         </div>

         @if ($section->subtitle)
            <div class="mb-4">
               @include('components.input', [
                  'id' => '',
                  'type' => 'text',
                  'name' => 'subtitle',
                  'value' => $section->subtitle,
                  'label' => 'Subtitle',
                  'fullWidth' => true,
                  'required' => true,
                  'flexLabel' => false,
                  'disabled' => false,
                  'error' => $errors->first('subtitle'),
                  'className' => 'h-12 px-6',
                  'placeholder' => 'Section subtitle',
               ])
            </div>
         @endif

         @if ($section->description)
            <div class="mb-4">
               @include('components.textarea', [
                  'rows' => 5,
                  'name' => 'description',
                  'value' => $section->description,
                  'label' => 'Description',
                  'fullWidth' => true,
                  'required' => true,
                  'flexLabel' => false,
                  'disabled' => false,
                  'error' => $errors->first('description'),
                  'className' => 'h-12 px-6',
                  'placeholder' => 'Section description',
                  'maxLength' => false,
               ])
            </div>
         @endif

         @if ($section->asset)
            @php
               $values = explode(".", $section->asset);
               $ext = $values[count($values)-1];
               $asset_type = $ext == 'mp4' ? 'video' : 'image';
            @endphp
            <div class="mb-4 pt-2">
               <p class="mb-2">{{__('Section Current Asset')}}</p>
               @if($ext == 'mp4')
                  <video controls class="w-full">
                     <source src="{{asset($section->asset)}}" type="video/mp4">
                  </video>
               @else
                  <img src="{{asset($section->asset)}}" alt="" class="w-full">
               @endif

               <input 
                  hidden 
                  type="hidden" 
                  name="asset_type" 
                  value="{{$asset_type}}"
               >
               <label for="asset{{$section->id}}" class="mt-2 mb-1 block">
                  {{$ext == 'mp4' ? __('Select New Video') : __('Select New Image')}}
               </label>
               <input 
                  type="file" 
                  name="asset" 
                  class="w-full"
                  id="asset{{$section->id}}" 
               >
               @error('asset')
                  <p class="text-red-500 text-xs">{{ $message }}</p>
               @enderror
            </div>
         @endif
         
         <div class="flex shrink-0 flex-wrap items-center justify-end">
            <button
               type="button"
               data-ripple-dark="true"
               data-dialog-close="true"
               class="middle none center mr-1 rounded-lg py-3 px-6 font-sans text-xs font-bold uppercase text-red-500 transition-all hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            >
               {{__('Cancel')}}
            </button>
            <button
               type="submit"
               data-ripple-light="true"
               class="middle none center rounded-lg bg-gradient-to-tr from-primary-600 to-primary-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-primary-500/20 transition-all hover:shadow-lg hover:shadow-primary-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            >
               {{__('Save Changes')}}
            </button>
         </div>
      </form>
   </div>
</div>