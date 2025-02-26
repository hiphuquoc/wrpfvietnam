@if(!empty($categoriesBlog))
   <aside id="categories-2" class="widget widget_categories">
      <h5 class="widget_title">Danh mục</h5>
      
      <ul>
         @foreach($categoriesBlog as $categoryMenu)
            @if($categoryMenu->seo->level==2)
               @php
                     $categoryMenuName = $categoryMenu->seos[0]->infoSeo->title ?? '';
               @endphp
               @if(!empty($categoryMenuName))
                     <li class="cat-item cat-item-95"><a href="/{{ $categoryMenu->seos[0]->infoSeo->slug_full }}" title="{{ $categoryMenuName }}">{{ $categoryMenuName }}</a></li>
               @endif
            @endif
         @endforeach
      </ul>

   </aside>
@endif