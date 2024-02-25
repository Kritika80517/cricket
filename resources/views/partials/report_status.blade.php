@if ($status == 'solved')
    <span class="badge text-white bg-success p-2">Solved</span>
@elseif ($status == 'inprogress')
    <span class="badge text-white bg-info p-2">Inprogress</span>
@elseif ($status == 'onhold')
    <span class="badge text-white bg-warning p-2">On-hold</span>
@else
    <span class="badge text-white bg-primary p-2">Pending</span>
@endif
