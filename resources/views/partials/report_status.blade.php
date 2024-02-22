@if ($status == 'solved')
    <span class="badge bg-success p-2">Solved</span>
@elseif ($status == 'inprogress')
    <span class="badge bg-info p-2">Inprogress</span>
@elseif ($status == 'onhold')
    <span class="badge bg-warning p-2">On-hold</span>
@else
    <span class="badge bg-primary p-2">Pending</span>
@endif
