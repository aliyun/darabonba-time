// This file is auto-generated, don't edit it. Thanks.
/**
 * This is a time module
 */
package client

import (
	"fmt"
	"strings"
	"time"

	"github.com/alibabacloud-go/tea/tea"
)

func Unix() (_result *string) {
	return tea.String(fmt.Sprintf("%d", time.Now().UTC().Unix()))
}

func UTC() (_result *string) {
	return tea.String(time.Now().UTC().String())
}

func Sleep(t *int64) {
	time.Sleep(time.Duration(tea.Int64Value(t)))
}

func Format(layout *string) (_result *string) {
	l := tea.StringValue(layout)
	l = strings.Replace(l, "yyyy", "2006", 1)
	l = strings.Replace(l, "MM", "01", 1)
	l = strings.Replace(l, "dd", "02", 1)
	l = strings.Replace(l, "hh", "15", 1)
	l = strings.Replace(l, "mm", "04", 1)
	l = strings.Replace(l, "ss", "05", 1)
	l = strings.Replace(l, "a", "PM", 1)
	l = strings.Replace(l, "EEEE", "Monday", 1)
	l = strings.Replace(l, "E", "Mon", 1)
	return tea.String(time.Now().UTC().Format(l))
}
