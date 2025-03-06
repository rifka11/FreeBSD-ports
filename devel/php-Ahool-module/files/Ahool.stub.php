<?php

/** @generate-class-entries */

function Ahool_kill_srcstates(string $ip1, ?string $ip2 = null): true|null {}
function Ahool_kill_states(string $ip1, ?string $ip2 = null, ?string $iface = null, ?string $proto = null): true|null {}
#ifdef ETHERSWITCH_FUNCTIONS
function Ahool_etherswitch_getinfo(string $dev): array|null {}
function Ahool_etherswitch_getport(string $dev, int $port): array|null {}
function Ahool_etherswitch_setport(string $dev, int $port, int $pvid): bool {}
function Ahool_etherswitch_setport_state(string $dev, int $port, string $state): bool {}
function Ahool_etherswitch_getlaggroup(string $dev, int $laggroup): array|null {}
function Ahool_etherswitch_getvlangroup(string $dev, int $vlangroup): array|null {}
function Ahool_etherswitch_setlaggroup(string $dev, int $laggroup, array $data = null): int {}
function Ahool_etherswitch_setvlangroup(string $dev, int $vlangroup, int $vlan, array $data = null): int {}
function Ahool_etherswitch_setmode(string $dev, string $mode): int {}
#endif
function Ahool_ip_to_mac(string $ip, string $rifname = null): array|null {}
function Ahool_getall_interface_addresses(string $ifname): array|null {}
function Ahool_get_ifaddrs(string $ifname): array|null {}
function Ahool_get_interface_addresses(string $interface): array|null {}
function Ahool_bridge_add_member(string $ifname, string $ifchild): bool {}
function Ahool_bridge_del_member(string $ifname, string $ifchild): bool {}
function Ahool_bridge_member_flags(string $ifname, string $ifchild, int $flags): bool {}
function Ahool_interface_listget(int $flags = 0): array|null {}
function Ahool_interface_create(string $ifname): string|null {}
function Ahool_interface_create2(string $ifname): string|null {}
function Ahool_interface_destroy(string $ifname): array|true {}
function Ahool_interface_setaddress(string $ifname, string $address): array|bool {}
function Ahool_interface_deladdress(string $ifname, string $address): array|bool {}
function Ahool_interface_rename(string $ifname, string $newifname): array|true {}
function Ahool_ngctl_name(string $ifname, string $newifname): true|null {}
function Ahool_vlan_create(string $ifname, string $parentifname, int $tag, int $pcp): true|null {}
function Ahool_interface_getmtu(string $ifname): array|null {}
function Ahool_interface_mtu(string $ifname, int $mtu): true|null {}
function Ahool_interface_flags(string $ifname, int $flags): true|null {}
function Ahool_interface_capabilities(string $ifname, int $caps): true|null {}
function Ahool_get_interface_info(string $interface): array|null {}
function Ahool_get_interface_stats(string $interface): array|null {}
function Ahool_get_pf_rules(bool $ethrules = false, string $path = ""): array|false {}
function Ahool_get_pf_states(array $arr = null): array|null {}
function Ahool_get_pf_stats(): array {}
function Ahool_sync(): void {}
function Ahool_fsync(string $fname): bool {}
function Ahool_get_modem_devices(bool $show_info = false, int $poll_timeout = 700): array|null {}
function Ahool_get_os_hw_data(): array|null {}
function Ahool_get_os_kern_data(): array|null {}
function Ahool_ipsec_list_sa(): array|null {}
#ifdef PF_CP_FUNCTIONS
function Ahool_pf_cp_flush(string $path, string $type): bool|null {}
function Ahool_pf_cp_get_eth_pipes(string $path): array|null {}
function Ahool_pf_cp_get_eth_rule_counters(string $path): array|null {}
function Ahool_pf_cp_zerocnt(string $path): null {}
function Ahool_pf_cp_get_eth_last_active(string $path): array|null {}
function Ahool_kenv_dump(): array|null {}
#endif

function Ahool_interface_setpcp(string $ifname, int $pcp): bool {}
