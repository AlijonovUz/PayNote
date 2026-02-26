<?php

namespace App\Http\Controllers;

use App\Http\Requests\Debt\IncreaseDebtRequest;
use App\Http\Requests\Debt\PayDebtRequest;
use App\Http\Requests\Debt\StoreRequest;
use App\Http\Requests\Debt\UpdateRequest;
use App\Models\Debt;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class DebtController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $debts = Debt::query()
            ->where('user_id', auth()->id())
            ->when($search, function (Builder $query) use ($search) {
                $query->where(function (Builder $query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%")
                        ->orWhere('phone', 'LIKE', "%{$search}%");
                });
            })
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('debt.index', compact('debts'));
    }

    public function create()
    {
        return view('debt.create');
    }

    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        Debt::create($validated);

        return redirect()->route('debt.index');
    }

    public function show(Debt $debt)
    {
        return view('debt.show', compact('debt'));
    }

    public function edit(Debt $debt)
    {
        return view('debt.edit', compact('debt'));
    }

    public function update(UpdateRequest $request, Debt $debt)
    {
        $debt->update($request->validated());
        return redirect()->route('debt.show', $debt);
    }

    public function increase(IncreaseDebtRequest $request, Debt $debt)
    {
        $validated = $request->validated();

        $debt->amount += $validated['amount'];

        if (!empty($validated['note'])) {
            $debt->note = trim(($debt->note ?? '') . ' ' . $validated['note']);
        }

        $debt->save();

        return redirect()->route('debt.show', $debt);
    }

    public function pay(PayDebtRequest $request, Debt $debt)
    {
        $validated = $request->validated();

        $debt->paid_amount += $validated['paid_amount'];
        $debt->save();

        return redirect()->route('debt.show', $debt);
    }

    public function delete(Debt $debt)
    {
        return view('debt.delete', compact('debt'));
    }

    public function destroy(Debt $debt)
    {
        $debt->delete();
        return redirect()->route('debt.index');
    }
}
