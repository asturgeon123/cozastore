<?php

namespace Illuminate\Foundation\Auth;

trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {

        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        if (\Auth::check() && \Auth::user()->type == 1)
        { 
            return '/panel';
        }
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }
}
