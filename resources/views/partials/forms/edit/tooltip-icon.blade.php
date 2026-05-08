@if(isset($tooltip_text) && $tooltip_text)
    <a href="#" 
       class="tooltip-icon" 
       data-toggle="tooltip" 
       data-placement="right" 
       title="{{ $tooltip_text }}"
       tabindex="0"
       style="margin-left: 5px; color: #0066cc; text-decoration: none; cursor: help;">
        <i class="fas fa-info-circle" aria-hidden="true"></i>
        <span class="sr-only">{{ $tooltip_text }}</span>
    </a>
@endif
