package client

import (
	"testing"
	"time"

	"github.com/alibabacloud-go/tea/tea"
	"github.com/alibabacloud-go/tea/utils"
)

func Test_Unix(t *testing.T) {
	a := Unix()
	utils.AssertEqual(t, 10, len(tea.StringValue(a)))
}

func Test_UTC(t *testing.T) {
	a := UTC()
	utils.AssertContains(t, tea.StringValue(a), "UTC")
}

func Test_Format(t *testing.T) {
	a := Format(tea.String("yyyyMMdd hh:mm a EEEE"))
	utils.AssertEqual(t, tea.StringValue(a), time.Now().UTC().Format("20060102 15:04 PM Monday"))
}
