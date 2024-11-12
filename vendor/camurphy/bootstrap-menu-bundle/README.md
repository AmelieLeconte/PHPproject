Bootstrap Menu Bundle
=====================
[![CircleCI](https://dl.circleci.com/status-badge/img/circleci/34vMYXApuzs6spAruM7wQy/JcJXpZqKaYA52SDiAunsPM/tree/main.svg?style=svg&circle-token=691995787d3ce0e1396b73f77a37252166a990c2)](https://dl.circleci.com/status-badge/redirect/circleci/34vMYXApuzs6spAruM7wQy/JcJXpZqKaYA52SDiAunsPM/tree/main)

A simple [Symfony](https://symfony.com/) bundle for defining your application's menus in configuration and rendering them to work with
[Bootstrap](https://getbootstrap.com/)'s [Navbar](https://getbootstrap.com/docs/5.2/components/navbar/) component. This bundle supports
Bootstrap versions 4 and 5.

Installation
------------
```bash
$ composer require camurphy/bootstrap-menu-bundle
```

Usage
-----
Your menus are defined in `config/packages/bootstrap_menu.yaml`.

Below is a very simple menu called `main` with only a single 'Logout' link.
```yaml
bootstrap_menu:
  version: 5 # Optional, defaults to Bootstrap 5
  dropdown_active_style: false # Optional, defaults to false
  dropdown_item_active_style: false # Optional, defaults to false
  menus:
    main:
      items:
        logout:
          label: 'Logout'
          route: 'app_logout'
```

Then within your template you can render your menu in a Navbar by passing the name of your menu to `render_bootstrap_menu`. This markup is
taken from the [Bootstrap Navbar Fixed example](https://getbootstrap.com/docs/5.2/examples/navbar-fixed/). The Bootstrap 4 version is
[here](https://getbootstrap.com/docs/4.6/examples/navbar-fixed)
```twig
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        {{ render_bootstrap_menu('main') }}
      </ul>
    </div>
  </div>
</nav>
```
Result:

![Example 1](https://github.com/cameronmurphy/bootstrap-menu-bundle/assets/1300032/128ec4b0-2f26-40d9-af14-c7ef5efc0f9d)

### Route parameters
Perhaps your route requires parameters. You can also specify these.
```yaml
bootstrap_menu:
  menus:
    main:
      items:
        backorder_report:
          label: 'Backorder Report'
          route: 'app_reports'
          route_parameters:
            id: 'backorder'
```

### External URL
If you would instead like to link to an absolute URL, use `url` instead.
```yaml
bootstrap_menu:
  menus:
    main:
      items:
        disney:
          label: 'Disney'
          url: 'https://www.disney.com'
```

### Dropdowns
Simply by specifying `items` instead of a `route` or `url` to link to, your menu item becomes a Dropdown. Here's an example where a
'Change Password' and a 'Logout' link are nested below an 'Account' dropdown.
```yaml
bootstrap_menu:
  menus:
    main:
      items:
        account:
          label: 'Account'
          items:
            change_password:
              label: 'Change password'
              route: 'app_change_password'
            logout:
              label: 'Logout'
              route: 'app_logout'
```
Result:

![Example 2](https://github.com/cameronmurphy/bootstrap-menu-bundle/assets/1300032/88b57cd9-2d1d-4389-870c-c3fbce0613d7)

#### Dividers
Dropdowns can also contain [Dividers](https://getbootstrap.com/docs/4.3/components/dropdowns/#dividers) to separate groups of related menu
items.
```yaml
bootstrap_menu:
  menus:
    main:
      items:
        account:
          label: 'Account'
          items:
            change_password:
              label: 'Change password'
              route: 'app_change_password'
            divider:
              is_divider: true
            logout:
              label: 'Logout'
              route: 'app_logout'
```
Result:

![Example 3](https://github.com/cameronmurphy/bootstrap-menu-bundle/assets/1300032/06ffb618-32d6-48ad-9641-38a59ccade8c)

#### Headers
Dividers that also contain a `label` become [Headers](https://getbootstrap.com/docs/4.3/components/dropdowns/#headers).
```yaml
bootstrap_menu:
  menus:
    main:
      items:
        account:
          label: 'Account'
          items:
            password_divider:
              is_divider: true
              label: 'Password Stuff'
            change_password:
              label: 'Change password'
              route: 'app_change_password'

            other_divider:
              is_divider: true
              label: 'Other Stuff'
            logout:
              label: 'Logout'
              route: 'app_logout'
```
Result:

![Example 4](https://github.com/cameronmurphy/bootstrap-menu-bundle/assets/1300032/6363a9b3-a5c4-4d39-9f04-a569dc286517)

#### Security
Certain parts of the menu may be locked down by role. This following example only allows administrators to change their password.
```yaml
bootstrap_menu:
  menus:
    main:
      items:
        account:
          label: 'Account'
          items:
            password_divider:
              is_divider: true
              label: 'Password Stuff'
            change_password:
              label: 'Change password'
              route: 'app_change_password'
              roles: [ 'ROLE_ADMINISTRATOR' ]

            other_divider:
              is_divider: true
              label: 'Other Stuff'
            logout:
              label: 'Logout'
              route: 'app_logout'
```
For a user without `ROLE_ADMINISTRATOR` they would see:

![Example 5](https://github.com/cameronmurphy/bootstrap-menu-bundle/assets/1300032/aa90ef88-72de-4b27-b474-096579f539b1)

The reason for this is Bootstrap Menu Bundle intelligently prunes Dropdowns to remove unnecessary Dividers. Because the user is not
permitted to see any items between 'Password Stuff' and 'Other Stuff', the 'Password Stuff' Divider is also pruned.

Security can also be configured at a Dropdown level. Perhaps only administrators are allowed to use the 'Users' menu.
```yaml
bootstrap_menu:
  menus:
    main:
      items:
        users:
          label: 'Users'
          roles: [ 'ROLE_ADMINISTRATOR' ]
          items:
            user_list:
              label: 'Users'
              route: 'app_user_list'
            new_user:
              label: 'New User'
              route: 'app_new_user'
```

##### Negating roles
You may also hide menu items from users that have a certain role by prefixing the role with an exclamation mark. This will take precedence
over included roles. In the example below, if they have both `ROLE_SUPPORT` and `ROLE_USER` they will not see the menu item.
```yaml
bootstrap_menu:
  menus:
    main:
      items:
        users:
          label: 'Users'
          roles: [ '!ROLE_SUPPORT', 'ROLE_USER' ]
          items:
            user_list:
              label: 'Users'
              route: 'app_user_list'
```

#### Active styles
Out of the box, top level menu items are given the [`active` class](https://getbootstrap.com/docs/5.2/components/navbar/#nav) when the
current route matches the menu item's route. In this example we're on the 'Reports' page.

![Example 6](https://github.com/cameronmurphy/bootstrap-menu-bundle/assets/1300032/8322b338-3f0d-4940-ab61-900e59886714)

##### Dropdown active styles
It's not documented, but the `active` class also works on dropdowns and dropdown items. To enable for dropdowns, set `dropdown_active_style`
to `true` in the config.

![Example 7](https://github.com/cameronmurphy/bootstrap-menu-bundle/assets/1300032/fb9c2645-9826-48c3-9ac4-2c6406e09bab)

To enable for dropdown items, set `dropdown_item_active_style` to true.

![Example 8](https://github.com/cameronmurphy/bootstrap-menu-bundle/assets/1300032/92e12bd9-ab28-44eb-ad2a-91fd3fab2a57)
