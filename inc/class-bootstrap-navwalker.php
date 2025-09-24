<?php

class Katen_Bootstrap_Navwalker extends Walker_Nav_Menu
{

    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        // برای سطوح عمیق‌تر اگر خواستی کلاس اضافه کن
        $submenu_class = $depth > 0 ? ' dropdown-submenu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu_class\">\n";
    }

    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $classes = empty($item->classes) ? [] : (array)$item->classes;

        $has_children = in_array('menu-item-has-children', $classes, true);
        $is_active = array_intersect($classes, ['current-menu-item', 'current-menu-ancestor', 'current_page_item', 'current_page_ancestor']);

        // li classes
        $li_classes = ['nav-item'];
        if ($has_children && $depth === 0) {
            $li_classes[] = 'dropdown';
        }
        if (!empty($is_active)) {
            $li_classes[] = 'active';
        }

        $class_names = implode(' ', array_map('sanitize_html_class', $li_classes));

        $output .= $indent . '<li class="' . esc_attr($class_names) . '">';

        // link classes + attrs
        $link_classes = $depth === 0 ? 'nav-link' : 'dropdown-item';
        $atts = [
            'href' => !empty($item->url) ? $item->url : '',
            'title' => !empty($item->attr_title) ? $item->attr_title : '',
            'target' => !empty($item->target) ? $item->target : '',
            'rel' => !empty($item->xfn) ? $item->xfn : '',
        ];

        if ($has_children && $depth === 0) {
            $link_classes .= ' dropdown-toggle';
            $atts['data-bs-toggle'] = 'dropdown';
            $atts['aria-expanded'] = 'false';
            $atts['role'] = 'button';
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $attributes .= ' ' . $attr . '="' . ($attr === 'href' ? esc_url($value) : esc_attr($value)) . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);

        $output .= '<a class="' . esc_attr($link_classes) . '"' . $attributes . '>';
        $output .= esc_html($title);
        $output .= '</a>';
    }

    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}
