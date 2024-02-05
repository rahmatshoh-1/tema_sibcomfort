<?php

namespace App\Filters;

class CoverageFilter extends QueryFilter
{

    public function materialTypes($materialType = '')
    {
        if ($materialType != '') {
            return $this->builder->where('material_type_id', $materialType);
        }
    }

    public function materials($material = '')
    {
        if ($material != '') {
            return $this->builder->where('material_id', $material);
        }
    }

    public function colors($color = '')
    {
        if ($color != '') {
            return $this->builder->where('color_id', $color);
        }
    }

    public function countries($country = '')
    {
        if ($country != '') {
            return $this->builder->where('country_id', $country);
        }
    }

    public function brands($brand = '')
    {
        if ($brand != '') {
            return $this->builder->where('brand_id', $brand);
        }
    }
}
