<?php

namespace Modules\Expense\Http\Controllers;

use Modules\Expense\Entities\ExpenseCategory;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Expense\Http\Requests\ExpenseCategoryFormRequest;

class ExpenseCategoryController extends Controller
{
    public function index()
    {
        $expenseCategories = ExpenseCategory::get();

        return view('expense::category.index', compact('expenseCategories'));
    }

    public function create()
    {
        return view('expense::category.form');
    }

    public function store(ExpenseCategoryFormRequest $request)
    {
        ExpenseCategory::create($request->validated());

        return redirect()->route('backend.expense-categories.index')->flashify('Created', 'Data has been created successfully.');

    }

    public function show($id)
    {
        return view('expense::show');
    }

    public function edit(ExpenseCategory $expenseCategory)
    {
        return view('expense::category.form', compact('expenseCategory'));
    }

    public function update(ExpenseCategoryFormRequest $request, ExpenseCategory $expenseCategory)
    {
        $expenseCategory->update($request->validated());

        return redirect()->route('backend.expense-categories.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(ExpenseCategory $expenseCategory)
    {
        $expenseCategory->delete();

        return redirect()->route('backend.expense-categories.index')->flashify('Deleted', 'Data has been deleted successfully.');

    }
}
