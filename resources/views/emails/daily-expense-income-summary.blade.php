<h1>Hello {{ $user->name }}</h1>

<h2>Today's Expenses</h2>
<ul>
@foreach($expenses as $expense)
    <li>{{ $expense->title }}: ${{ $expense->amount }}</li>
@endforeach
</ul>

<h2>Today's Incomes</h2>
<ul>
@foreach($incomes as $income)
    <li>{{ $income->source }}: ${{ $income->amount }}</li>
@endforeach
</ul>
