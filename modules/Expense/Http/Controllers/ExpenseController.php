<?php

namespace Modules\Expense\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Expense\Entities\Expense;
use Modules\Expense\Entities\ExpenseCategory;
use Modules\Expense\Http\Requests\ExpenseFormRequest;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::with('category')->get();
        return view('expense::expense.index', compact('expenses'));
    }

    public function create()
    {
        $expenses = ExpenseCategory::get();
        return view('expense::expense.form', compact('expenses'));
    }

    public function store(ExpenseFormRequest $request)
    {
        Expense::create($request->validated());

        return redirect()->route('backend.expenses.index')->flashify('Created', 'Data has been created successfully.');
    }

    public function show($id)
    {
        return view('expense::show');
    }

    public function edit(Expense $expense)
    {
        $data['expenses'] = ExpenseCategory::get();
        $data['expense'] = $expense;
        return view('expense::expense.form', $data);
    }

    public function update(ExpenseFormRequest $request, Expense $expense)
    {
        $expense->update($request->validated());

        return redirect()->route('backend.expenses.index')->flashify('Updated', 'Data has been updated successfully.');

    }

    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()->route('backend.expenses.index')->flashify('Deleted', 'Data has been deleted successfully.');

    }
}
