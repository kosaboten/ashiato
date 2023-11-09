<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 人材一覧ページを表示
        return view('portfolios.index');
    }

    public function list()
    {
        // user_idがログイン中のユーザーと等しいポートフォリオを一件取得する
        $portfolio = Portfolio::where('user_id', Auth::id())->limit(1)->get();
        return redirect(route('portfolios.edit', $portfolio[0]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $portfolio = new Portfolio();
        // ログイン中のユーザーのIDを取得して代入
        $portfolio->user_id = Auth::id();

        // トランザクション開始
        DB::beginTransaction();
        try {
            $portfolio->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();     // ミスったらロールバック

            // backで直前のページ(create.blade.php)にリダイレクトする
            // withInputで入力した値を渡す
            // withErrorsでエラーオブジェクトにエラーメッセージを追加する
            return back()->withInput()->withErrors($e->getMessage());
        }

        return redirect(route('portfolios.edit', $portfolio));
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        return view('portfolios.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        return view('portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
