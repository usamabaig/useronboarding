<template>
    <div>
        <i-select v-model="model10" multiple style="width:260px">
            <i-option v-for="item in cityList" :value="item.value" :key="item.value">{{ item.label }}</i-option>
        </i-select>
        
        <Select v-model="model9" style="width:200px">
            <Option value="New York" label="New York">
                <span>New York</span>
                <span style="float:right;color:#ccc">America</span>
            </Option>
            <Option value="London" label="London">
                <span>London</span>
                <span style="float:right;color:#ccc">U.K.</span>
            </Option>
            <Option value="Sydney" label="Sydney">
                <span>Sydney</span>
                <span style="float:right;color:#ccc">Australian</span>
            </Option>
        </Select>
        <Select v-model="model16" multiple :max-tag-count="2">
            <Option v-for="item in cityList" :value="item.value" :key="item.value">{{ item.label }}</Option>
        </Select>
        <Select v-model="model16" multiple :max-tag-count="2" :max-tag-placeholder="maxTagPlaceholder">
            <Option v-for="item in cityList" :value="item.value" :key="item.value">{{ item.label }}</Option>
        </Select>

        <Row>
            <Col span="12" style="padding-right:10px">
                <Select v-model="model11" filterable>
                    <Option v-for="item in cityList" :value="item.value" :key="item.value">{{ item.label }}</Option>
                </Select>
            </Col>
            <Col span="12">
                <Select v-model="model12" filterable multiple>
                    <Option v-for="item in cityList" :value="item.value" :key="item.value">{{ item.label }}</Option>
                </Select>
            </Col>
        </Row>

    </div>
</template>
<script>
    export default {
        data () {
            return {
                model9: '',
                model10: [],
                model16: [],
                model11: '',
                model12: [],
                cityList: [
                    {
                        value: 'New York',
                        label: 'New York'
                    },
                    {
                        value: 'London',
                        label: 'London'
                    },
                    {
                        value: 'Sydney',
                        label: 'Sydney'
                    },
                    {
                        value: 'Ottawa',
                        label: 'Ottawa'
                    },
                    {
                        value: 'Paris',
                        label: 'Paris'
                    },
                    {
                        value: 'Canberra',
                        label: 'Canberra'
                    }
                ]
            }
        },
        methods: {
            maxTagPlaceholder (num) {
                return 'more '+ num;
            }
        }

    }
</script>

