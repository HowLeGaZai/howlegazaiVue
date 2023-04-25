<template>
    <div class="smart-bar">
        <div class="btn-member-block">

            <router-link :to="{ name: 'activity' }">
                <button type="button" class="btn-member" :class="{ ['btn-color-green']: $route.name === 'activity',['btn-color-gray']: $route.name != 'activity'}"><i class="bi bi-calendar2-event-fill"></i></button>
            </router-link>
            <p class="btn-mem-p" :class="{ ['btn-font-color-green']: $route.name === 'activity',['btn-font-color-gray']: $route.name != 'activity'}">活動總覽</p>
        </div>
        
        <div class="btn-member-block">
            <router-link :to="{ name: 'space' }">
                <button type="button" class="btn-member" :class="{ ['btn-color-green']: $route.name === 'space',['btn-color-gray']: $route.name != 'space'}"><i class="bi bi-door-open-fill"></i></button>
            </router-link>
            <p class="btn-mem-p" :class="{ ['btn-font-color-green']: $route.name === 'space',['btn-font-color-gray']: $route.name != 'space'}">空間預約</p>
        </div>

        <div class="btn-member-block">
            <button type="button" class="btn-member unopened-smartbar">
            <i class="bi bi-basket-fill"></i>
            </button>
            <!-- <p class="btn-mem-p">開發中</p> -->
            <p class="btn-mem-p">團購</p>
        </div>
        
        <div class="btn-member-block">
            <button type="button" class="btn-member unopened-smartbar">
            <i class="bi bi-fire"></i>
            </button>
            <!-- <p class="btn-mem-p">開發中</p> -->
            <p class="btn-mem-p btn-font-color-gray">瓦斯表回報</p>
        </div>
        
        <div class="btn-member-block">
            <button type="button" class="btn-member unopened-smartbar">
            
            <i class="bi bi-hammer"></i>
            </button>
            <!-- <p class="btn-mem-p">開發中</p> -->
            <p class="btn-mem-p btn-font-color-gray">維修通報</p>
        </div>
        
        
        <div class="btn-member-block" id="unopened">
            <button type="button" class="btn-member unopened-smartbar">
        
            <i class="bi bi-shield-fill-check"></i>
            
            </button>
            <!-- <p class="btn-mem-p">開發中</p> -->
            <p class="btn-mem-p btn-font-color-gray">守望相助</p>
        </div>
    </div>
</template>